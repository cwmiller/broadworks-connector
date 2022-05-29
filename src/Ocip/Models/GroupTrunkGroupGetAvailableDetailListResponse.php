<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetAvailableDetailListResponse
 *
 * Response to GroupTrunkGroupGetAvailableDetailListRequest.
 *
 * @see GroupTrunkGroupGetAvailableDetailListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8523","type":"sequence"}]
 */
class GroupTrunkGroupGetAvailableDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8523
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup[]
     */
    protected $trunkGroup = array(
        
    );

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

