<?php
namespace Iksula\DynamicPromotion\Api\Data;
 
interface DynamicPromotionInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    
    const ENTITY_ID = 'entity_id';
    const PROMOTION_ID = 'promotion_id';
    const DEAL_ID = 'deal_id';
    const PROMO_TYPE = 'promo_type';
    const SOURCE = 'source';
    const SOURCE_ITEMS = 'source_items';
    const SRC_QTY = 'src_qty';
    const TARGET = 'target';
    const TARGET_ITEMS = 'target_items';
    const TGT_QTY = 'tgt_qty';
    const CURRENCY = 'currency';
    const AMOUNT_OFF = 'amount_off';
    const PERCENT_OFF = 'percent_off';
    const ACTUAL_PRICE = 'actual_price';
    const REDUCED_PRICE = 'reduced_price';
    const START_DATE = 'start_date';
    const END_DATE = 'end_date';
 
     /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId();
 
    /**
     * Set EntityId.
     */
    public function setEntityId($EntityId);

    /**
     * Get PromotionId.
     *
     * @return int
     */
    public function getPromotionId();
 
    /**
     * Set PromotionId.
     */
    public function setPromotionId($PromotionId);
 
    /**
     * Get DealId.
     *
     * @return int
     */
    public function getDealId();
 
    /**
     * Set DealId.
     */
    public function setDealId($DealId);
 
    /**
     * Get PromoType.
     *
     * @return varchar
     */
    public function getPromoType();
 
    /**
     * Set PromoType.
     */
    public function setPromoType($PromoType);
 
    /**
     * Get Source.
     *
     * @return varchar
     */
    public function getSource();
 
    /**
     * Set Source.
     */
    public function setSource($Source);
 
    /**
     * Get SourceItems.
     *
     * @return int
     */
    public function getSourceItems();
 
    /**
     * Set SourceItems.
     */
    public function setSourceItems($SourceItems);
 
    /**
     * Get SrcQty.
     *
     * @return int
     */
    public function getSrcQty();
 
    /**
     * Set SrcQty.
     */
    public function setSrcQty($SrcQty);
 
    /**
     * Get Target.
     *
     * @return varchar
     */
    public function getTarget();
 
    /**
     * Set Target.
     */
    public function setTarget($Target);

    /**
     * Get TargetItems.
     *
     * @return varchar
     */
    public function getTargetItems();
 
    /**
     * Set TargetItems.
     */
    public function setTargetItems($TargetItems);

    /**
     * Get TgtQty.
     *
     * @return int
     */
    public function getTgtQty();
 
    /**
     * Set TgtQty.
     */
    public function setTgtQty($TgtQty);

    /**
     * Get Currency.
     *
     * @return varchar
     */
    public function getCurrency();
 
    /**
     * Set Currency.
     */
    public function setCurrency($Currency);

    /**
     * Get AmountOff.
     *
     * @return varchar
     */
    public function getAmountOff();
 
    /**
     * Set AmountOff.
     */
    public function setAmountOff($AmountOff);

    /**
     * Get PercentOff.
     *
     * @return varchar
     */
    public function getPercentOff();
 
    /**
     * Set PercentOff.
     */
    public function setPercentOff($PercentOff);

    /**
     * Get ActualPrice.
     *
     * @return varchar
     */
    public function getActualPrice();
 
    /**
     * Set ActualPrice.
     */
    public function setActualPrice($ActualPrice);

    /**
     * Get ReducedPrice.
     *
     * @return varchar
     */
    public function getReducedPrice();
 
    /**
     * Set ReducedPrice.
     */
    public function setReducedPrice($ReducedPrice);

    /**
     * Get StartDate.
     *
     * @return varchar
     */
    public function getStartDate();
 
    /**
     * Set StartDate.
     */
    public function setStartDate($StartDate);

    /**
     * Get EndDate.
     *
     * @return varchar
     */
    public function getEndDate();
 
    /**
     * Set EndDate.
     */
    public function setEndDate($EndDate);
}
