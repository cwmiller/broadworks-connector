<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkTrunkGroupKey
 *
 * Identifies a trunk group within an Enterprise Trunk where the service provider id is already known.
 *
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:1858","type":"sequence"}]
 */
class EnterpriseTrunkTrunkGroupKey
{

    /**
     * @ElementName groupId
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1858
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName trunkGroupName
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1858
     * @var string|null
     */
    private $trunkGroupName = null;

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
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
     * Getter for trunkGroupName
     *
     * @return string
     */
    public function getTrunkGroupName()
    {
        return $this->trunkGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupName;
    }

    /**
     * Setter for trunkGroupName
     *
     * @param string $trunkGroupName
     * @return $this
     */
    public function setTrunkGroupName($trunkGroupName)
    {
        $this->trunkGroupName = $trunkGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupName()
    {
        $this->trunkGroupName = null;
        return $this;
    }


}

