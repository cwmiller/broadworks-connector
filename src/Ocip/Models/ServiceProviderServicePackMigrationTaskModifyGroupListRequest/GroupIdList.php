<?php

namespace CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequest;

/**
 * GroupIdList
 */
class GroupIdList
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
    public function setGroupId($groupId)
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
    public function addGroupId($groupId)
    {
        $this->groupId []= $groupId;
        return $this;
    }


}

