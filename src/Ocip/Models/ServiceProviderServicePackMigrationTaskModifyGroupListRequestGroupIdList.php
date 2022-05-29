<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
 *
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:6474","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
{

    /**
     * @ElementName groupId
     * @Type string
     * @Array
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6474
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $groupId = array(
        
    );

    /**
     * Getter for groupId
     *
     * @return string[]
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string[] $groupId
     * @return $this
     */
    public function setGroupId(array $groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Adder for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function addGroupId(string $groupId)
    {
        $this->groupId[] = $groupId;
        return $this;
    }


}

