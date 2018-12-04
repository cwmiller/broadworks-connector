<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkTrunkGroupKey
 *
 * Identifies a trunk group within an Enterprise Trunk where the service provider id is already known.
 *
 * @Groups [{"id":"5472d4b45ad0ad56e4f82361e2a66a53:1761","type":"sequence"}]
 */
class EnterpriseTrunkTrunkGroupKey
{

    /**
     * @ElementName groupId
     * @Type string
     * @Group 5472d4b45ad0ad56e4f82361e2a66a53:1761
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName trunkGroupName
     * @Type string
     * @Group 5472d4b45ad0ad56e4f82361e2a66a53:1761
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

