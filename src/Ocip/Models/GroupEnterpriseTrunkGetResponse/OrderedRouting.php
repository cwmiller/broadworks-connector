<?php

namespace CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetResponse;

/**
 * OrderedRouting
 */
class OrderedRouting
{

    /**
     * @ElementName trunkGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    private $trunkGroup = array(
        
    );

    /**
     * @ElementName orderingAlgorithm
     * @var string|null
     */
    private $orderingAlgorithm = null;

    /**
     * Getter for trunkGroup
     *
     * @ElementName trunkGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @ElementName trunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[] $trunkGroup
     * @return $this
     */
    public function setTrunkGroup($trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * Adder for trunkGroup
     *
     * @ElementName trunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup []= $trunkGroup;
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

