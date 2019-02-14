<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Ls\Replication\Api\Data\ReplHierarchyLeafInterface;

class ReplHierarchyLeaf extends AbstractModel implements ReplHierarchyLeafInterface, IdentityInterface
{

    const CACHE_TAG = 'ls_replication_repl_hierarchy_leaf';

    protected $_cacheTag = 'ls_replication_repl_hierarchy_leaf';

    protected $_eventPrefix = 'ls_replication_repl_hierarchy_leaf';

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property string $HierarchyCode
     */
    protected $HierarchyCode = null;

    /**
     * @property string $nav_id
     */
    protected $nav_id = null;

    /**
     * @property string $ImageId
     */
    protected $ImageId = null;

    /**
     * @property boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @property string $NodeId
     */
    protected $NodeId = null;

    /**
     * @property HierarchyLeafType $Type
     */
    protected $Type = null;

    /**
     * @property string $scope
     */
    protected $scope = null;

    /**
     * @property int $scope_id
     */
    protected $scope_id = null;

    /**
     * @property string $processed
     */
    protected $processed = null;

    /**
     * @property string $is_updated
     */
    protected $is_updated = null;

    public function _construct()
    {
        $this->_init( 'Ls\Replication\Model\ResourceModel\ReplHierarchyLeaf' );
    }

    public function getIdentities()
    {
        return [ self::CACHE_TAG . '_' . $this->getId() ];
    }

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->setData( 'Description', $Description );
        $this->Description = $Description;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getData( 'Description' );
    }

    /**
     * @param string $HierarchyCode
     * @return $this
     */
    public function setHierarchyCode($HierarchyCode)
    {
        $this->setData( 'HierarchyCode', $HierarchyCode );
        $this->HierarchyCode = $HierarchyCode;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getHierarchyCode()
    {
        return $this->getData( 'HierarchyCode' );
    }

    /**
     * @param string $nav_id
     * @return $this
     */
    public function setNavId($nav_id)
    {
        $this->setData( 'nav_id', $nav_id );
        $this->nav_id = $nav_id;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getNavId()
    {
        return $this->getData( 'nav_id' );
    }

    /**
     * @param string $ImageId
     * @return $this
     */
    public function setImageId($ImageId)
    {
        $this->setData( 'ImageId', $ImageId );
        $this->ImageId = $ImageId;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getImageId()
    {
        return $this->getData( 'ImageId' );
    }

    /**
     * @param boolean $IsDeleted
     * @return $this
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->setData( 'IsDeleted', $IsDeleted );
        $this->IsDeleted = $IsDeleted;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->getData( 'IsDeleted' );
    }

    /**
     * @param string $NodeId
     * @return $this
     */
    public function setNodeId($NodeId)
    {
        $this->setData( 'NodeId', $NodeId );
        $this->NodeId = $NodeId;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getNodeId()
    {
        return $this->getData( 'NodeId' );
    }

    /**
     * @param HierarchyLeafType $Type
     * @return $this
     */
    public function setType($Type)
    {
        $this->setData( 'Type', $Type );
        $this->Type = $Type;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return HierarchyLeafType
     */
    public function getType()
    {
        return $this->getData( 'Type' );
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->setData( 'scope', $scope );
        $this->scope = $scope;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->getData( 'scope' );
    }

    /**
     * @param int $scope_id
     * @return $this
     */
    public function setScopeId($scope_id)
    {
        $this->setData( 'scope_id', $scope_id );
        $this->scope_id = $scope_id;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return int
     */
    public function getScopeId()
    {
        return $this->getData( 'scope_id' );
    }

    /**
     * @param string $processed
     * @return $this
     */
    public function setProcessed($processed)
    {
        $this->setData( 'processed', $processed );
        $this->processed = $processed;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessed()
    {
        return $this->getData( 'processed' );
    }

    /**
     * @param string $is_updated
     * @return $this
     */
    public function setIsUpdated($is_updated)
    {
        $this->setData( 'is_updated', $is_updated );
        $this->is_updated = $is_updated;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getIsUpdated()
    {
        return $this->getData( 'is_updated' );
    }


}
