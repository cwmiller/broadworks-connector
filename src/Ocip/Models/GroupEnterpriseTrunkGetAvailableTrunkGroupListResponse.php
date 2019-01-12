<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse
 *
 * Response to GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 *
 * @see GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:604","type":"sequence"}]
 */
class GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroupName
     * @Type string
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:604
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

