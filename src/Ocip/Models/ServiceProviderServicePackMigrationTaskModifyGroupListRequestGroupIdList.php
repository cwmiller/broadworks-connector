<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
 *
 * @Groups [{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:5446","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
{

    /**
     * @ElementName groupId
     * @Type string
     * @Array
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:5446
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

