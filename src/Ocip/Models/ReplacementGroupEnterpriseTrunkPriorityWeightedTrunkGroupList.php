<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
 *
 * A list of enterprise trunk priority weighted trunk groups in a group that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:2010","type":"sequence"}]
 */
class ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
{
    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup
     * @Array
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    protected $trunkGroup = [
        
    ];

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

