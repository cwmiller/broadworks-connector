<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
 *
 * A list of enterprise trunk priority weighted trunk groups in a group that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:1841","type":"sequence"}]
 */
class ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
{

    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup
     * @Array
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1841
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

