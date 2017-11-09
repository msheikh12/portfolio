<?php 

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\block\BlockInterface;

class ABlock implements BlockInterface {
    public function getWeight()
    {}

    public function language()
    {}

    public function uuid()
    {}

    public function uriRelationships()
    {}

    public function setThirdPartySetting($module, $key, $value)
    {}

    public function getThirdPartySetting($module, $key, $default = NULL)
    {}

    public function getConfigDependencyKey()
    {}

    public function enable()
    {}

    public function toArray()
    {}

    public static function create(array $values = [])
    {}

    public function id()
    {}

    public function getEntityTypeId()
    {}

    public function hasLinkTemplate($key)
    {}

    public function getTheme()
    {}

    public function postSave(EntityStorageInterface $storage, $update = TRUE)
    {}

    public function createDuplicate()
    {}

    public function getPluginId()
    {}

    public function toLink($text = NULL, $rel = 'canonical', array $options = [])
    {}

    public static function preCreate(EntityStorageInterface $storage, array $values)
    {}

    public function createDuplicateBlock($new_id = NULL, $new_theme = NULL)
    {}

    public function addCacheContexts(array $cache_contexts)
    {}

    public function postCreate(EntityStorageInterface $storage)
    {}

    public function getCacheMaxAge()
    {}

    public function getRegion()
    {}

    public function calculateDependencies()
    {}

    public function preSave(EntityStorageInterface $storage)
    {}

    public function getOriginalId()
    {}

    public function getCacheContexts()
    {}

    public static function postLoad(EntityStorageInterface $storage, array $entities)
    {}

    public function setVisibilityConfig($instance_id, array $configuration)
    {}

    public function status()
    {}

    public function hasTrustedData()
    {}

    public function addCacheableDependency($other_object)
    {}

    public function access($operation, AccountInterface $account = NULL, $return_as_object = FALSE)
    {}

    public function getThirdPartySettings($module)
    {}

    public function getCacheTagsToInvalidate()
    {}

    public function setSyncing($status)
    {}

    public function link($text = NULL, $rel = 'canonical', array $options = [])
    {}

    public function save()
    {}

    public function isSyncing()
    {}

    public function isUninstalling()
    {}

    public function getVisibilityCondition($instance_id)
    {}

    public function delete()
    {}

    public function setOriginalId($id)
    {}

    public function addCacheTags(array $cache_tags)
    {}

    public static function load($id)
    {}

    public function isInstallable()
    {}

    public function get($property_name)
    {}

    public function getThirdPartyProviders()
    {}

    public function getConfigDependencyName()
    {}

    public function bundle()
    {}

    public function unsetThirdPartySetting($module, $key)
    {}

    public function setRegion($region)
    {}

    public function toUrl($rel = 'canonical', array $options = [])
    {}

    public function set($property_name, $value)
    {}

    public function trustData()
    {}

    public function mergeCacheMaxAge($max_age)
    {}

    public function onDependencyRemoval(array $dependencies)
    {}

    public function getDependencies()
    {}

    public function setWeight($weight)
    {}

    public function getEntityType()
    {}

    public function isNew()
    {}

    public function label()
    {}

    public function urlInfo($rel = 'canonical', array $options = [])
    {}

    public static function loadMultiple(array $ids = NULL)
    {}

    public function getConfigTarget()
    {}

    public function getCacheTags()
    {}

    public function getTypedData()
    {}

    public function getVisibilityConditions()
    {}

    public function setStatus($status)
    {}

    public function url($rel = 'canonical', $options = [])
    {}

    public function referencedEntities()
    {}

    public function disable()
    {}

    public function getPlugin()
    {}

    public function enforceIsNew($value = TRUE)
    {}

    public static function postDelete(EntityStorageInterface $storage, array $entities)
    {}

    public static function preDelete(EntityStorageInterface $storage, array $entities)
    {}

    public function getVisibility()
    {}
}

