<?php
namespace Chaitnya\Form\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Formdata extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('formdata', 'id');
    }
}