<?php

namespace Iksula\DynamicPromotion\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper{

	protected $productRepository;

	public function __construct(
		\Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
		\Magento\Framework\App\ResourceConnection $resourceConnection,
		\Magento\Sales\Api\Data\OrderInterface $order,
        \Iksula\DynamicPromotion\Model\DynamicPromotionFactory $dynamicpromotionFactory,
		\Magento\Store\Model\StoreManagerInterface $storeManager

	) {
		$this->productRepository   = $productRepository;
		$this->order               = $order;
		$this->_resource		   = $resourceConnection;
		$this->storeManager        = $storeManager;
        $this->dynamicpromotionFactory = $dynamicpromotionFactory;
		$this->connection = $resourceConnection->getConnection();

	}

	public function getDynamicPromotionMessage($sku,$store_id) {

		$writer = new \Laminas\Log\Writer\Stream(BP . '/var/log/dynamic_promo_msg_'.date('F Y').'.log');
         $logger = new \Laminas\Log\Logger();
         $logger->addWriter($writer);
         $logger->info("---- Start promo_msg.");
         $logger->info("---- store_id.---".$store_id);
         $ksa_store = array(1,2);
         $uae_store = array(3,4);
         $currency='';
        if(in_array($store_id, $ksa_store)){
        	$currency='SAR';
        }
        if(in_array($store_id, $uae_store)){
        	$currency='AED';
        }
        $val = [];
        $post = $this->dynamicpromotionFactory->create()->getCollection()->addFieldToFilter('source_items', ['eq' => $sku])->addFieldToFilter('currency', $currency);
        //$post = $this->dynamicpromotionFactory->create()->load($sku, 'source_items');;
		 	 //print_r($post['source_items']);
              foreach ($post as $child){ 
                array_push($val,$child['source']);
              }
		return $val;
        
	}
}
