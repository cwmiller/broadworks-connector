<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
 */
class ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
{

    /**
     * @ElementName groupId
     * @var string[]
     */
    private $groupId = array(
        
    );

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string[]
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string[] $groupId
     * @return $this
     */
    public function setGroupId(array $groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Adder for groupId
     *
     * @ElementName groupId
     * @param string $groupId
     * @return $this
     */
    public function addGroupId(string $groupId)
    {
        $this->groupId []= $groupId;
        return $this;
    }


}

