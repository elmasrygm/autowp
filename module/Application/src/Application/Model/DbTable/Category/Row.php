<?php

namespace Application\Model\DbTable\Category;

use Application\Model\DbTable\Category\Vehicle as CategoryVehicle;
use Application\Model\DbTable\Picture;

use Zend_Db_Expr;

class Row extends \Application\Db\Table\Row
{
    private static $categoryCarTable;

    private static function getCategoryCarTable()
    {
        return self::$categoryCarTable
            ? self::$categoryCarTable
            : self::$categoryCarTable = new CategoryVehicle();
    }

    public function findTopPicture()
    {
        $pictures = new Picture();
        return $pictures->fetchRow(
            $pictures->select(true)
                ->join('picture_item', 'pictures.id = picture_item.picture_id', null)
                ->join('category_item', 'picture_item.item_id = category_item.item_id', null)
                ->where('pictures.status IN (?)', [Picture::STATUS_ACCEPTED, Picture::STATUS_NEW])
                ->where('category_item.category_id = ?', $this->id)
                ->order([
                    new Zend_Db_Expr('picture_item.perspective_id = 7 DESC'),
                    new Zend_Db_Expr('picture_item.perspective_id = 8 DESC'),
                    new Zend_Db_Expr('picture_item.perspective_id = 1 DESC'),
                    'pictures.ratio DESC',
                    'pictures.views DESC'
                ])
                ->limit(1)
        );
    }

    public function getCarsCount(array $options = [])
    {
        $options = array_merge([
            'brand' => false
        ], $options);

        $categoryCarTable = self::getCategoryCarTable();
        $db = $categoryCarTable->getAdapter();

        $select = $db->select()
            ->from('cars', new Zend_Db_Expr('COUNT(1)'))
            ->where('not cars.is_group')
            ->join('item_parent_cache', 'cars.id = item_parent_cache.item_id', null)
            ->join('category_item', 'item_parent_cache.parent_id = category_item.item_id', null)
            ->join('category_parent', 'category_item.category_id = category_parent.category_id', null)
            ->where('category_parent.parent_id = ?', $this->id);

        return $db->fetchOne($select);
    }

    public function getWeekCarsCount(array $options = [])
    {
        $options = array_merge([
            'brand' => false
        ], $options);

        $categoryCarTable = self::getCategoryCarTable();
        $db = $categoryCarTable->getAdapter();

        //TODO: group by cars.id
        $select = $db->select()
            ->from('cars', new Zend_Db_Expr('COUNT(1)'))
            ->where('not cars.is_group')
            ->join('item_parent_cache', 'cars.id = item_parent_cache.item_id', null)
            ->join('category_item', 'item_parent_cache.parent_id = category_item.item_id', null)
            ->join('category_parent', 'category_item.category_id = category_parent.category_id', null)
            ->where('category_parent.parent_id = ?', $this->id)
            ->where('category_item.add_datetime > DATE_SUB(NOW(), INTERVAL 7 DAY)');

        return $db->fetchOne($select);
    }

    public function getOwnCarsCount()
    {
        $categoryCarTable = self::getCategoryCarTable();

        $db = $categoryCarTable->getAdapter();
        //TODO: group by cars.id
        $select = $db->select()
            ->from('cars', new Zend_Db_Expr('COUNT(1)'))
            ->where('not cars.is_group')
            ->join('item_parent_cache', 'cars.id = item_parent_cache.item_id', null)
            ->join('category_item', 'item_parent_cache.parent_id = category_item.item_id', null)
            ->where('category_item.category_id = ?', $this->id);

        return $db->fetchOne($select);
    }

    public function getWeekOwnCarsCount()
    {
        $categoryCarTable = self::getCategoryCarTable();

        $db = $categoryCarTable->getAdapter();
        //TODO: group by cars.id
        $select = $db->select()
            ->from('cars', new Zend_Db_Expr('COUNT(1)'))
            ->where('not cars.is_group')
            ->join('item_parent_cache', 'cars.id = item_parent_cache.item_id', null)
            ->join('category_item', 'item_parent_cache.parent_id = category_item.item_id', null)
            ->where('category_item.category_id = ?', $this->id)
            ->where('category_item.add_datetime > DATE_SUB(NOW(), INTERVAL 7 DAY)');

        return $db->fetchOne($select);
    }
}
