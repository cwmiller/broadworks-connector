<?php

namespace CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest;

/**
 * OrderedRouting
 */
class OrderedRouting
{

    /**
     * @ElementName trunkGroup
     * @var string[]
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
     * @return string[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @ElementName trunkGroup
     * @param string[] $trunkGroup
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
     * @param string $trunkGroup
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

