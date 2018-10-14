<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetAvailableDetailListResponse
 *
 * Response to GroupTrunkGroupGetAvailableDetailListRequest.
 *
 * @see GroupTrunkGroupGetAvailableDetailListRequest
 */
class GroupTrunkGroupGetAvailableDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup[]
     */
    private $trunkGroup = array(
        
    );

    /**
     * Getter for trunkGroup
     *
     * @ElementName trunkGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @ElementName trunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup[] $trunkGroup
     * @return $this
     */
    public function setTrunkGroup(array $trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * Adder for trunkGroup
     *
     * @ElementName trunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponseTrunkGroup $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup []= $trunkGroup;
        return $this;
    }


}

