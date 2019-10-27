<?php

namespace Application\Controller\Plugin;

use Application\ItemNameFormatter;
use Application\Model\Item;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Car extends AbstractPlugin
{
    /**
     * @var ItemNameFormatter
     */
    private $itemNameFormatter;

    /**
     * @var Item
     */
    private $itemModel;

    public function __construct(
        ItemNameFormatter $itemNameFormatter,
        Item $item
    ) {
        $this->itemNameFormatter = $itemNameFormatter;
        $this->itemModel = $item;
    }

    /**
     * @return Car
     */
    public function __invoke()
    {
        return $this;
    }

    public function formatName($vehicle, $language)
    {
        return $this->itemNameFormatter->format(
            $this->itemModel->getNameData($vehicle, $language),
            $language
        );
    }
}
