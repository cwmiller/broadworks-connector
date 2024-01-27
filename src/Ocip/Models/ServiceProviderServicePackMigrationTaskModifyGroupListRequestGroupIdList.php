<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
 *
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6542","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
{
    /**
     * @ElementName groupId
     * @Type string
     * @Array
     * @Group e19a9072c2dad499e9f28837da5768db:6542
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $groupId = [
        
    ];

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

