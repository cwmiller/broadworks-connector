<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse
 *
 * Response to GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 *
 * @see GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:708","type":"sequence"}]
 */
class GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName trunkGroupName
     * @Type string
     * @Array
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:708
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $trunkGroupName = [
        
    ];

    /**
     * Getter for trunkGroupName
     *
     * @return string[]
     */
    public function getTrunkGroupName()
    {
        return $this->trunkGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupName;
    }

    /**
     * Setter for trunkGroupName
     *
     * @param string[] $trunkGroupName
     * @return $this
     */
    public function setTrunkGroupName(array $trunkGroupName)
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

    /**
     * Adder for trunkGroupName
     *
     * @param string $trunkGroupName
     * @return $this
     */
    public function addTrunkGroupName(string $trunkGroupName)
    {
        $this->trunkGroupName[] = $trunkGroupName;
        return $this;
    }
}

