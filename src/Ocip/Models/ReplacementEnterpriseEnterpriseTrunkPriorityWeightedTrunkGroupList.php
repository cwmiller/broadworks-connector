<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList
 *
 * A list of enterprise trunk priority weighted trunk groups that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1962","type":"sequence"}]
 */
class ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList
{
    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup
     * @Array
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1962
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    protected $trunkGroup = [
        
    ];

    /**
     * Getter for trunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[] $trunkGroup
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup[] = $trunkGroup;
        return $this;
    }
}

