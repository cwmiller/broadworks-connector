<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkModifyRequestOrderedRouting
 */
class EnterpriseEnterpriseTrunkModifyRequestOrderedRouting
{

    /**
     * @ElementName trunkGroupList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkTrunkGroupKeyList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkTrunkGroupKeyList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $trunkGroupList = null;

    /**
     * @ElementName orderingAlgorithm
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm|null
     */
    private $orderingAlgorithm = null;

    /**
     * Getter for trunkGroupList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkTrunkGroupKeyList|null
     */
    public function getTrunkGroupList()
    {
        return $this->trunkGroupList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupList;
    }

    /**
     * Setter for trunkGroupList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkTrunkGroupKeyList|null $trunkGroupList
     * @return $this
     */
    public function setTrunkGroupList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkTrunkGroupKeyList $trunkGroupList)
    {
        if ($trunkGroupList === null) {
            $this->trunkGroupList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->trunkGroupList = $trunkGroupList;
        }
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
     * Getter for orderingAlgorithm
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm
     */
    public function getOrderingAlgorithm()
    {
        return $this->orderingAlgorithm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderingAlgorithm;
    }

    /**
     * Setter for orderingAlgorithm
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm $orderingAlgorithm
     * @return $this
     */
    public function setOrderingAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm $orderingAlgorithm)
    {
        $this->orderingAlgorithm = $orderingAlgorithm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrderingAlgorithm()
    {
        $this->orderingAlgorithm = null;
        return $this;
    }


}

