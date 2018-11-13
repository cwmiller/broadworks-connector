<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
 *
 * A list of enterprise trunk priority weighted trunk groups in a group that
 * replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
{

    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    private $trunkGroup = array(
        
    );

    /**
     * Getter for trunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup[] $trunkGroup
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup[] = $trunkGroup;
        return $this;
    }


}

