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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    private $trunkGroupList = array(
        
    );

    /**
     * Getter for trunkGroupList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    public function getTrunkGroupList()
    {
        return $this->trunkGroupList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupList;
    }

    /**
     * Setter for trunkGroupList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[] $trunkGroupList
     * @return $this
     */
    public function setTrunkGroupList(array $trunkGroupList)
    {
        $this->trunkGroupList = $trunkGroupList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupList()
    {
        $this->trunkGroupList = null;
        return $this;
    }

    /**
     * Adder for trunkGroupList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroupList
     * @return $this
     */
    public function addTrunkGroupList($trunkGroupList)
    {
        $this->trunkGroupList[] = $trunkGroupList;
        return $this;
    }


}

