<?php

namespace Chaitnya\Grid\Api\Data;

interface GridInterface
{
    
    const ENTITY_ID = 'entity_id';
    const TITLE = 'title';
    const CONTENT = 'content';
    const PUBLISH_DATE = 'publish_date';
    const IS_ACTIVE = 'is_active';
    const UPDATE_TIME = 'update_time';
    const CREATED_AT = 'created_at';
  
    public function getEntityId();

    public function setEntityId($entityId);

    public function getTitle();

    public function setTitle($title);

    public function getContent();

    public function setContent($content);

    public function getPublishDate();

    public function setPublishDate($publishDate);

    public function getIsActive();

    public function setIsActive($isActive);

    public function getUpdateTime();

    public function setUpdateTime($updateTime);

    public function getCreatedAt();

    public function setCreatedAt($createdAt);
}