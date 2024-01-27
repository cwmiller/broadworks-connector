<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkTrunkGroupKey
 *
 * Identifies a trunk group within an Enterprise Trunk where the service provider id is already known.
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1936","type":"sequence"}]
 */
class EnterpriseTrunkTrunkGroupKey
{
    /**
     * @ElementName groupId
     * @Type string
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1936
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName trunkGroupName
     * @Type string
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1936
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $trunkGroupName = null;

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

