<?php

namespace Application\View\Helper;

use ArrayObject;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\View\Helper\AbstractHelper;

use function is_array;
use function is_numeric;

class Page extends AbstractHelper
{
    private TableGateway $pageTable;

    /** @var null|array|ArrayObject */
    private $doc;

    private array $pages = [];

    public function __construct(TableGateway $pageTable)
    {
        $this->doc       = null;
        $this->pageTable = $pageTable;
    }

    /**
     * @param array|ArrayObject|int $value
     */
    public function __invoke($value): self
    {
        if ($value) {
            $doc = null;

            if ($value instanceof ArrayObject || is_array($value)) {
                $doc = $value;
            } elseif (is_numeric($value)) {
                $doc = $this->getPageById($value);
            }

            $this->doc = $doc;
        }

        return $this;
    }

    public function __get(string $name): string
    {
        if (! $this->doc) {
            return '';
        }
        switch ($name) {
            case 'name':
            case 'title':
            case 'breadcrumbs':
                $key = 'page/' . $this->doc['id'] . '/' . $name;

                $result = $this->view->translate($key);
                if (! $result || $result === $key) {
                    $result = $this->view->translate($key, null, 'en');
                }

                if ((! $result || $result === $key) && ($name !== 'name')) {
                    $key = 'page/' . $this->doc['id'] . '/name';

                    $result = $this->view->translate($key);
                    if (! $result || $result === $key) {
                        $result = $this->view->translate($key, null, 'en');
                    }
                }

                return $result;
        }

        return '';
    }

    /**
     * @return array|ArrayObject
     */
    private function getPageById(int $id)
    {
        if (isset($this->pages[$id])) {
            return $this->pages[$id];
        }

        $row = $this->pageTable->select([
            'id' => $id,
        ])->current();

        $this->pages[$id] = $row;

        return $row;
    }
}
