<?php

namespace Application;

use Exception;
use InvalidArgumentException;
use Zend\Db\Sql;
use Zend\Db\TableGateway\TableGateway;
use Zend\Router\Http\TreeRouteStack;
use Autowp\Comments\CommentsService;
use Autowp\Message\MessageService;
use Autowp\User\Model\User;
use Application\Model\Item;
use Application\Model\Picture;

class Comments
{
    private const PREVIEW_LENGTH = 60;

    public const PICTURES_TYPE_ID = 1;
    public const ITEM_TYPE_ID = 2;
    public const VOTINGS_TYPE_ID = 3;
    public const ARTICLES_TYPE_ID = 4;
    public const FORUMS_TYPE_ID = 5;

    /**
     * @var CommentsService
     */
    private $service;

    /**
     * @var TreeRouteStack
     */
    private $router;

    /**
     * @var HostManager
     */
    private $hostManager;

    /**
     * @var MessageService
     */
    private $message;

    private $translator;

    /**
     * @var Picture
     */
    private $picture;

    /**
     * @var TableGateway
     */
    private $articleTable;

    /**
     * @var TableGateway
     */
    private $itemTable;

    /**
     * @var User
     */
    private $userModel;

    public function __construct(
        CommentsService $service,
        TreeRouteStack $router,
        HostManager $hostManager,
        MessageService $message,
        $translator,
        Picture $picture,
        TableGateway $articleTable,
        TableGateway $itemTable,
        User $userModel
    ) {
        $this->service = $service;
        $this->router = $router;
        $this->hostManager = $hostManager;
        $this->message = $message;
        $this->translator = $translator;
        $this->picture = $picture;
        $this->articleTable = $articleTable;
        $this->itemTable = $itemTable;
        $this->userModel = $userModel;
    }

    public function getMessageUrl(int $messageId, $uri)
    {
        $message = $this->service->getMessageRow($messageId);

        if (! $message) {
            throw new InvalidArgumentException("Message `$messageId` not found");
        }

        return $this->getMessageRowUrl($message, true, $uri);
    }

    public function getMessageRowUrl($message, $canonical = false, $uri = null): string
    {
        $path = $this->getMessageRowPath($message, $canonical, $uri);
        if (! $canonical || ! $uri) {
            return $path;
        }

        $uri->setPath($path);

        return $uri->toString();
    }

    public function getMessageRowPath($message)
    {
        $url = null;

        switch ($message['type_id']) {
            case self::PICTURES_TYPE_ID:
                $picture = $this->picture->getRow(['id' => (int)$message['item_id']]);
                if (! $picture) {
                    throw new Exception("Picture `{$message['item_id']}` not found");
                }

                $url = '/picture/' . urlencode($picture['identity']);
                break;

            case self::ITEM_TYPE_ID:
                $item = $this->itemTable->select(['id' => (int)$message['item_id']])->current();
                if (! $item) {
                    throw new Exception("Item `{$message['item_id']}` not found");
                }
                switch ($item['item_type_id']) {
                    case Item::TWINS:
                        $url = '/twins/group/' . $item['id'];
                        break;
                    case Item::MUSEUM:
                        $url = '/museums/' . $item['id'];
                        break;
                    default:
                        throw new Exception(sprintf(
                            "Failed to build url form message `%s` item_type `%s`",
                            $message['item_id'],
                            $item['item_type_id']
                        ));
                }
                break;

            case self::VOTINGS_TYPE_ID:
                $url = '/voting/' . $message['item_id'];
                break;

            case self::ARTICLES_TYPE_ID:
                $article = $this->articleTable->select([
                    'id = ?' => $message['item_id']
                ])->current();
                if (! $article) {
                    throw new Exception("Article `{$message['item_id']}` not found");
                }
                $url = '/articles/' . urlencode($article['catname']);
                break;

            case self::FORUMS_TYPE_ID:
                $url = '/forums/message/' . $message['id'];
                break;

            default:
                throw new Exception("Unknown type_id `{$message['type_id']}`");
        }

        return $url;
    }

    public function getMessagePreview($message)
    {
        return StringUtils::getTextPreview($message, [
            'maxlines'  => 1,
            'maxlength' => self::PREVIEW_LENGTH
        ]);
    }

    public function service()
    {
        return $this->service;
    }

    public function cleanBrokenMessages()
    {
        $affected = 0;

        // pictures
        $rows = $this->service()->getList([
            'type' => self::PICTURES_TYPE_ID,
            'callback' => function (Sql\Select $select) {
                $select
                    ->join('pictures', 'comment_message.item_id = pictures.id', [], $select::JOIN_LEFT)
                    ->where('pictures.id is null');
            }
        ]);
        foreach ($rows as $row) {
            $affected += $this->service()->deleteMessage($row['id']);
        }

        // item
        $rows = $this->service()->getList([
            'type' => self::ITEM_TYPE_ID,
            'callback' => function (Sql\Select $select) {
                $select
                    ->join('item', 'comment_message.item_id = item.id', [], $select::JOIN_LEFT)
                    ->where('item.id is null');
            }
        ]);
        foreach ($rows as $row) {
            $affected += $this->service()->deleteMessage($row['id']);
        }

        // votings
        $rows = $this->service()->getList([
            'type' => self::VOTINGS_TYPE_ID,
            'callback' => function (Sql\Select $select) {
                $select
                    ->join('voting', 'comment_message.item_id = voting.id', [], $select::JOIN_LEFT)
                    ->where('voting.id is null');
            }
        ]);
        foreach ($rows as $row) {
            $affected += $this->service()->deleteMessage($row['id']);
        }

        // articles
        $rows = $this->service()->getList([
            'type' => self::ARTICLES_TYPE_ID,
            'callback' => function (Sql\Select $select) {
                $select
                    ->join('articles', 'comment_message.item_id = articles.id', [], $select::JOIN_LEFT)
                    ->where('articles.id is null');
            }
        ]);
        foreach ($rows as $row) {
            $affected += $this->service()->deleteMessage($row['id']);
        }

        // forums
        $rows = $this->service()->getList([
            'type' => self::FORUMS_TYPE_ID,
            'callback' => function (Sql\Select $select) {
                $select
                    ->join('forums_topics', 'comment_message.item_id = forums_topics.id', [], $select::JOIN_LEFT)
                    ->where('forums_topics.id is null');
            }
        ]);
        foreach ($rows as $row) {
            $affected += $this->service()->deleteMessage($row['id']);
        }

        return $affected;
    }

    public function notifySubscribers($messageId): void
    {
        $comment = $this->service->getMessageRow($messageId);

        if (! $comment) {
            return;
        }

        $author = $this->userModel->getRow(['id' => (int)$comment['author_id']]);

        if (! $author) {
            return;
        }

        $ids = $this->service->getSubscribersIds($comment['type_id'], $comment['item_id'], true);
        $subscribers = $this->userModel->getRows(['id' => $ids]);

        foreach ($subscribers as $subscriber) {
            if ($subscriber['id'] == $author['id']) {
                continue;
            }

            $uri = $this->hostManager->getUriByLanguage($subscriber['language']);
            $uri->setPath('/users/' . ($author['identity'] ? $author['identity'] : 'user' . $author['id']));
            $userUrl = $uri->toString();

            $url = $this->getMessageUrl($messageId, $uri) . '#msg' . $messageId;

            $message = sprintf(
                $this->translator->translate('pm/user-%s-post-new-message-%s', 'default', $subscriber['language']),
                $userUrl,
                $url
            );
            $this->message->send(null, $subscriber['id'], $message);

            $this->service->markSubscriptionSent($comment['type_id'], $comment['item_id'], $subscriber['id']);
        }
    }
}
