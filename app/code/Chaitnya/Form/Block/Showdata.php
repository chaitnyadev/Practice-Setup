<?php

namespace Chaitnya\Form\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Chaitnya\Form\Model\ResourceModel\Formdata\CollectionFactory;

class Showdata extends Template
{

    public $collection;

    public function __construct(Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection()
    {
        return $this->collection->create();
    }

    public function getDeleteAction()
    {
        return $this->getUrl('form/index/delete', ['_secure' => true]);
    }

}