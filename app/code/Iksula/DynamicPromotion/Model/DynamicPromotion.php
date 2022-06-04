<?php 
namespace Iksula\DynamicPromotion\Model;

use Iksula\DynamicPromotion\Api\Data\DynamicPromotionInterface;


class DynamicPromotion extends \Magento\Framework\Model\AbstractModel implements DynamicPromotionInterface {

    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'dynamic_promo_pdl';

    /**
     * @var string
     */
    protected $_cacheTag = 'dynamic_promo_pdl';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'dynamic_promo_pdl';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Iksula\DynamicPromotion\Model\ResourceModel\DynamicPromotion');
    }

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($EntityId)
    {
        return $this->setData(self::ENTITY_ID, $EntityId);
    }


    /**
     * Get PromotionId.
     *
     * @return int
     */
    public function getPromotionId()
    {
        return $this->getData(self::PROMOTION_ID);
    }

    /**
     * Set PromotionId.
     */
    public function setPromotionId($PromotionId)
    {
        return $this->setData(self::PROMOTION_ID, $PromotionId);
    }

    /**
     * Get DealId.
     *
     * @return int
     */
    public function getDealId()
    {
        return $this->getData(self::DealId);
    }

    /**
     * Set DealId.
     */
    public function setDealId($DealId)
    {
        return $this->setData(self::DealId, $DealId);
    }

    /**
     * Get getPromoType.
     *
     * @return varchar
     */
    public function getPromoType()
    {
        return $this->getData(self::PROMO_TYPE);
    }

    /**
     * Set PromoType.
     */
    public function setPromoType($PromoType)
    {
        return $this->setData(self::PROMO_TYPE, $PromoType);
    }

    /**
     * Get Source.
     *
     * @return varchar
     */
    public function getSource()
    {
        return $this->getData(self::SOURCE);
    }

    /**
     * Set Source.
     */
    public function setSource($Source)
    {
        return $this->setData(self::SOURCE, $Source);
    }

    /**
     * Get SourceItems.
     *
     * @return int
     */
    public function getSourceItems()
    {
        return $this->getData(self::SOURCE_ITEMS);
    }

    /**
     * Set SourceItems.
     */
    public function setSourceItems($SourceItems)
    {
        return $this->setData(self::SOURCE_ITEMS, $SourceItems);
    }

    /**
     * Get SrcQty.
     *
     * @return int
     */
    public function getSrcQty()
    {
        return $this->getData(self::SRC_QTY);
    }

    /**
     * Set SrcQty.
     */
    public function setSrcQty($SrcQty)
    {
        return $this->setData(self::SRC_QTY, $SrcQty);
    }

    /**
     * Get Target.
     *
     * @return varchar
     */
    public function getTarget()
    {
        return $this->getData(self::TARGET);
    }

    /**
     * Set Target.
     */
    public function setTarget($Target)
    {
        return $this->setData(self::TARGET, $Target);
    }

    /**
     * Get TargetItems.
     *
     * @return varchar
     */
    public function getTargetItems()
    {
        return $this->getData(self::TARGET_ITEMS);
    }
 
    /**
     * Set TargetItems.
     */
    public function setTargetItems($TargetItems)
    {
        return $this->setData(self::TARGET_ITEMS, $TargetItems);
    }

    
    /**
     * Get getTgtQty.
     *
     * @return int
     */
    public function getTgtQty()
    {
        return $this->getData(self::TGT_QTY);
    }
 
    /**
     * Set TgtQty.
     */
    public function setTgtQty($TgtQty)
    {
        return $this->setData(self::TGT_QTY, $TgtQty);
    }

    /**
     * Get getCurrency.
     *
     * @return varchar
     */
    public function getCurrency()
    {
        return $this->getData(self::CURRENCY);
    }
 
    /**
     * Set Currency.
     */
    public function setCurrency($Currency)
    {
        return $this->setData(self::CURRENCY, $Currency);
    }

    /**
     * Get getAmountOff.
     *
     * @return varchar
     */
    public function getAmountOff()
    {
        return $this->getData(self::AMOUNT_OFF);
    }
 
    /**
     * Set AmountOff.
     */
    public function setAmountOff($AmountOff)
    {
        return $this->setData(self::AMOUNT_OFF, $AmountOff);
    }

    /**
     * Get getPercentOff.
     *
     * @return varchar
     */
    public function getPercentOff()
    {
        return $this->getData(self::PERCENT_OFF);
    }
 
    /**
     * Set PercentOff.
     */
    public function setPercentOff($PercentOff)
    {
        return $this->setData(self::PERCENT_OFF, $PercentOff);
    }

    /**
     * Get getActualPrice.
     *
     * @return varchar
     */
    public function getActualPrice()
    {
        return $this->getData(self::ACTUAL_PRICE);
    }
 
    /**
     * Set ActualPrice.
     */
    public function setActualPrice($ActualPrice)
    {
        return $this->setData(self::ACTUAL_PRICE, $ActualPrice);
    }

    /**
     * Get getReducedPrice.
     *
     * @return varchar
     */
    public function getReducedPrice()
    {
        return $this->getData(self::REDUCED_PRICE);
    }
 
    /**
     * Set ReducedPrice.
     */
    public function setReducedPrice($ReducedPrice)
    {
        return $this->setData(self::REDUCED_PRICE, $ReducedPrice);
    }

    /**
     * Get getStartDate.
     *
     * @return varchar
     */
    public function getStartDate()
    {
        return $this->getData(self::START_DATE);
    }
 
    /**
     * Set StartDate.
     */
    public function setStartDate($StartDate)
    {
        return $this->setData(self::START_DATE, $StartDate);
    }

    /**
     * Get getEndDate.
     *
     * @return varchar
     */
    public function getEndDate()
    {
        return $this->getData(self::END_DATE);
    }
 
    /**
     * Set EndDate.
     */
    public function setEndDate($EndDate)
    {
        return $this->setData(self::END_DATE, $EndDate);
    }
}