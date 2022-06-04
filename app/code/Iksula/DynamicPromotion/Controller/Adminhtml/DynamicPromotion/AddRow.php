<?php
namespace Iksula\DynamicPromotion\Controller\Adminhtml\DynamicPromotion;

use Magento\Framework\Controller\ResultFactory;

class AddRow extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\Registry
     */
    private $coreRegistry;

    /**
     * @var \Iksula\DynamicPromotion\Model\DynamicPromotionFactory
     */
    private $dynamicpromotionFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry,
     * @param \Iksula\DynamicPromotion\Model\DynamicPromotionFactory $dynamicdromotionFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Iksula\DynamicPromotion\Model\DynamicPromotionFactory $dynamicpromotionFactory
    ) {
        parent::__construct($context);
        $this->coreRegistry = $coreRegistry;
        $this->DynamicPromotionFactory = $dynamicpromotionFactory;
    }

    /**
     * Mapped Grid List page.
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $rowId = (int) $this->getRequest()->getParam('id');
        $writer = new \Laminas\Log\Writer\Stream(BP . '/var/log/productdata_242.log');
$logger = new \Laminas\Log\Logger();
$logger->addWriter($writer);
$logger->info($rowId);
        $rowData = $this->DynamicPromotionFactory->create();
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        if ($rowId) {
           $rowData = $rowData->load($rowId);
           $rowTitle = $rowData->getTitle();
           if (!$rowData->getEntityId()) {
               $this->messageManager->addError(__('row data no longer exist.'));
               $this->_redirect('dynamicpromotion/dynamicpromotion/rowdata');
               return;
           }
       }

       $this->coreRegistry->register('row_data', $rowData);
       $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
       $title = $rowId ? __('Edit Row Data ').$rowTitle : __('Add Row Data');
       $resultPage->getConfig()->getTitle()->prepend($title);
       return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Iksula_DynamicPromotion::add_row');
    }
}