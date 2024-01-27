<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetAvailableDetailListResponse
 *
 * Response to GroupTrunkGroupGetAvailableDetailListRequest.
 *
 * @see GroupTrunkGroupGetAvailableDetailListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8237","type":"sequence"}]
 */
class GroupTrunkGroupGetAvailableDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:8237
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup[]
     */
    protected $trunkGroup = [
        
    ];

    /**
     * Getter for trunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup[] $trunkGroup
     * @return $this
     */
    public function setTrunkGroup(array $trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroup()
    {
        $this->trunkGroup = null;
        return $this;
    }

    /**
     * Adder for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup[] = $trunkGroup;
        return $this;
    }
}

