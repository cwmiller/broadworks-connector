<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkAddRequest21OrderedRouting
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:575","type":"sequence"}]
 */
class GroupEnterpriseTrunkAddRequest21OrderedRouting
{
    /**
     * @ElementName trunkGroup
     * @Type string
     * @Array
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:575
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $trunkGroup = [
        
    ];

    /**
     * @ElementName orderingAlgorithm
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:575
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm|null
     */
    protected $orderingAlgorithm = null;

    /**
     * Getter for trunkGroup
     *
     * @return string[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param string[] $trunkGroup
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
     * @param string $trunkGroup
     * @return $this
     */
    public function addTrunkGroup(string $trunkGroup)
    {
        $this->trunkGroup[] = $trunkGroup;
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

