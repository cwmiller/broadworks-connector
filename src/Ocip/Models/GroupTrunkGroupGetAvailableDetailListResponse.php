<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetAvailableDetailListResponse
 *
 * Response to GroupTrunkGroupGetAvailableDetailListRequest.
 */
class GroupTrunkGroupGetAvailableDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponse\TrunkGroup[]
     */
    private $trunkGroup = array(
        
    );

    /**
     * Getter for trunkGroup
     *
     * @ElementName trunkGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponse\TrunkGroup[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @ElementName trunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponse\TrunkGroup[] $trunkGroup
     * @return $this
     */
    public function setTrunkGroup($trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * Adder for trunkGroup
     *
     * @ElementName trunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponse\TrunkGroup $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup []= $trunkGroup;
        return $this;
    }


}

