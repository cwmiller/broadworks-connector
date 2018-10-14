<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList
 *
 * A list of enterprise trunk priority weighted trunk groups that replaces a
 * previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList
{

    /**
     * @ElementName trunkGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    private $trunkGroup = array(
        
    );

    /**
     * Getter for trunkGroup
     *
     * @ElementName trunkGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @ElementName trunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[] $trunkGroup
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup []= $trunkGroup;
        return $this;
    }


}

