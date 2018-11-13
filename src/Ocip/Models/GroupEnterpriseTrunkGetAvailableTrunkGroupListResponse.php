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
     * @Type string
     * @Array
     * @var string[]
     */
    private $trunkGroupName = array(
        
    );

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

