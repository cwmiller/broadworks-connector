<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseTrunkTrunkGroupKeyList
 *
 * A list of Enterprise Trunk Krunk Group Keys that replaces a previously
 * configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementEnterpriseTrunkTrunkGroupKeyList
{

    /**
     * @ElementName trunkGroupList
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    private $trunkGroupList = array(
        
    );

    /**
     * Getter for trunkGroupList
     *
     * @ElementName trunkGroupList
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    public function getTrunkGroupList()
    {
        return $this->trunkGroupList;
    }

    /**
     * Setter for trunkGroupList
     *
     * @ElementName trunkGroupList
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[] $trunkGroupList
     * @return $this
     */
    public function setTrunkGroupList($trunkGroupList)
    {
        $this->trunkGroupList = $trunkGroupList;
        return $this;
    }

    /**
     * Adder for trunkGroupList
     *
     * @ElementName trunkGroupList
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroupList
     * @return $this
     */
    public function addTrunkGroupList($trunkGroupList)
    {
        $this->trunkGroupList []= $trunkGroupList;
        return $this;
    }


}
