<?php

namespace CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequest;

/**
 * OrderedRouting
 */
class OrderedRouting
{

    /**
     * @ElementName trunkGroupList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkTrunkGroupList|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkTrunkGroupList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTrunkGroupList()
    {
        return $this->trunkGroupList;
    }

    /**
     * Setter for trunkGroupList
     *
     * @ElementName trunkGroupList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkTrunkGroupList|null|\CWM\BroadWorksConnector\Ocip\Nil $trunkGroupList
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

