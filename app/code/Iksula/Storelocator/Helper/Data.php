<?php
namespace Iksula\Storelocator\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\Stdlib\CookieManagerInterface;

class Data extends AbstractHelper {

    public function __construct(
        CookieManagerInterface $cookieManager,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Helper\Image $imageHelper,
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ){
        $this->cookieManager = $cookieManager;
        $this->categoryFactory = $categoryFactory;
        $this->productRepository = $productRepository;
        $this->imageHelper = $imageHelper;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }
    public function getStoreCount() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue('storelocator/banner_upload/totalStores',$storeScope);
    }
    public function getStoreColor() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue('storelocator/banner_upload/totalStoresColor',$storeScope);
    }
    public function getCityCount() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue('storelocator/banner_upload/totalCities',$storeScope);
    }
    public function getCityColor() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue('storelocator/banner_upload/totalCitiesColor',$storeScope);
    }
    public function getCustomerCount() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue('storelocator/banner_upload/totalCustomers',$storeScope);
    }
    public function getCustomerColor() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue('storelocator/banner_upload/totalCustomersColor',$storeScope);
    }
}