<?php

namespace Iksula\DynamicPromotion\Model\ResourceModel\DynamicPromotion;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Iksula\DynamicPromotion\Model\DynamicPromotion', 'Iksula\DynamicPromotion\Model\ResourceModel\DynamicPromotion');
    }
}