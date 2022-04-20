<?php
namespace Chaitnya\Form\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Formdata extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Chaitnya\Form\Model\ResourceModel\Formdata');
    }
}