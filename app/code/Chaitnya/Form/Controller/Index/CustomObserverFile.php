<?php
/**
 * Created By : Rohan Hapani
 */
namespace Chaitnya\Form\Controller\Index;

class CustomObserverFile extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context      $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $this->_eventManager->dispatch('rh_customobserver_log', ['custom_text' => 'Custom Observer123']);
        $resultPage->getConfig()->getTitle()->prepend(__('Welcome to RH Custom Observer module'));
        return $resultPage;
    }
}
?>