<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
 */
class ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
{

    /**
     * @ElementName groupId
     * @Type string
     * @Array
     * @var string[]
     */
    private $groupId = array(
        
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

