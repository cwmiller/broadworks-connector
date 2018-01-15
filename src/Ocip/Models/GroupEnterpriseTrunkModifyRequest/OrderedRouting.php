<?php

namespace CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequest;

/**
 * OrderedRouting
 */
class OrderedRouting
{

    /**
     * @ElementName trunkGroupList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkTrunkGroupList|null
     */
    private $trunkGroupList = null;

    /**
     * @ElementName orderingAlgorithm
     * @var string|null
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
    public function setTrunkGroupList($trunkGroupList)
    {
        $this->trunkGroupList = $trunkGroupList;
        return $this;
    }

    /**
     * Getter for orderingAlgorithm
     *
     * @ElementName orderingAlgorithm
     * @return string|null
     */
    public function getOrderingAlgorithm()
    {
        return $this->orderingAlgorithm;
    }

    /**
     * Setter for orderingAlgorithm
     *
     * @ElementName orderingAlgorithm
     * @param string|null $orderingAlgorithm
     * @return $this
     */
    public function setOrderingAlgorithm($orderingAlgorithm)
    {
        $this->orderingAlgorithm = $orderingAlgorithm;
        return $this;
    }


}

