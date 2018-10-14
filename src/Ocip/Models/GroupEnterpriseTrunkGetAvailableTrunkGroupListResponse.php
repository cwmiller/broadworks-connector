<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse
 *
 * Response to GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 *
 * @see GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest
 */
class GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroupName
     * @var string[]
     */
    private $trunkGroupName = array(
        
    );

    /**
     * Getter for trunkGroupName
     *
     * @ElementName trunkGroupName
     * @return string[]
     */
    public function getTrunkGroupName()
    {
        return $this->trunkGroupName;
    }

    /**
     * Setter for trunkGroupName
     *
     * @ElementName trunkGroupName
     * @param string[] $trunkGroupName
     * @return $this
     */
    public function setTrunkGroupName(array $trunkGroupName)
    {
        $this->trunkGroupName = $trunkGroupName;
        return $this;
    }

    /**
     * Adder for trunkGroupName
     *
     * @ElementName trunkGroupName
     * @param string $trunkGroupName
     * @return $this
     */
    public function addTrunkGroupName(string $trunkGroupName)
    {
        $this->trunkGroupName []= $trunkGroupName;
        return $this;
    }


}

