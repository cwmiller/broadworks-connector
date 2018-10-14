<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkModifyRequestOrderedRouting
 */
class GroupEnterpriseTrunkModifyRequestOrderedRouting
{

    /**
     * @ElementName trunkGroupList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkTrunkGroupList|null
     */
    private $trunkGroupList = null;

    /**
     * @ElementName orderingAlgorithm
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm|null
     */
    private $orderingAlgorithm = null;

    /**
     * Getter for trunkGroupList
     *
     * @ElementName trunkGroupList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkTrunkGroupList|null
     */
    public function getTrunkGroupList()
    {
        return $this->trunkGroupList;
    }

    /**
     * Setter for trunkGroupList
     *
     * @ElementName trunkGroupList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkTrunkGroupList|null $trunkGroupList
     * @return $this
     */
    public function setTrunkGroupList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkTrunkGroupList $trunkGroupList)
    {
        $this->trunkGroupList = $trunkGroupList;
        return $this;
    }

    /**
     * Getter for orderingAlgorithm
     *
     * @ElementName orderingAlgorithm
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm|null
     */
    public function getOrderingAlgorithm()
    {
        return $this->orderingAlgorithm;
    }

    /**
     * Setter for orderingAlgorithm
     *
     * @ElementName orderingAlgorithm
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm|null $orderingAlgorithm
     * @return $this
     */
    public function setOrderingAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm $orderingAlgorithm)
    {
        $this->orderingAlgorithm = $orderingAlgorithm;
        return $this;
    }


}

