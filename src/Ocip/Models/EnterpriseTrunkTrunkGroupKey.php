<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkTrunkGroupKey
 *
 * Identifies a trunk group within an Enterprise Trunk where the service provider
 * id is already known.
 */
class EnterpriseTrunkTrunkGroupKey
{

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName trunkGroupName
     * @var string|null
     */
    private $trunkGroupName = null;

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for trunkGroupName
     *
     * @ElementName trunkGroupName
     * @return string|null
     */
    public function getTrunkGroupName()
    {
        return $this->trunkGroupName;
    }

    /**
     * Setter for trunkGroupName
     *
     * @ElementName trunkGroupName
     * @param string|null $trunkGroupName
     * @return $this
     */
    public function setTrunkGroupName($trunkGroupName)
    {
        $this->trunkGroupName = $trunkGroupName;
        return $this;
    }


}

