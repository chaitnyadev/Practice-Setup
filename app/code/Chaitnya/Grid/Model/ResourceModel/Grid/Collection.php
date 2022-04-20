<?php

namespace Chaitnya\Grid\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
  
    protected function _construct()
    {
        $this->_init('Chaitnya\Grid\Model\Grid', 'Chaitnya\Grid\Model\ResourceModel\Grid');
    }
}