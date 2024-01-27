<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseEnterpriseTrunkTrunkGroupKeyList
 *
 * A list of Enterprise Trunk Krunk Group Keys that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1974","type":"sequence"}]
 */
class ReplacementEnterpriseEnterpriseTrunkTrunkGroupKeyList
{
    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey
     * @Array
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1974
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    protected $trunkGroup = [
        
    ];

    /**
     * Getter for trunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[] $trunkGroup
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup[] = $trunkGroup;
        return $this;
    }
}

