<?php
namespace Chaitnya\Form\Model\ResourceModel\Formdata;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Chaitnya\Form\Model\Formdata', 'Chaitnya\Form\Model\ResourceModel\Formdata');
    }
}