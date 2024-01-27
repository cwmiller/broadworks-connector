<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup
 *
 * Trunk group details (order and weight) for each trunk group
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1910","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup
{
    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1910
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey|null
     */
    protected $trunkGroup = null;

    /**
     * @ElementName priority
     * @Type int
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1910
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $priority = null;

    /**
     * @ElementName weight
     * @Type int
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1910
     * @MinInclusive 1
     * @MaxInclusive 65536
     * @var int|null
     */
    protected $weight = null;

    /**
     * Getter for trunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroup
     * @return $this
     */
    public function setTrunkGroup(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroup)
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
     * Getter for priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priority;
    }

    /**
     * Setter for priority
     *
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriority()
    {
        $this->priority = null;
        return $this;
    }

    /**
     * Getter for weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->weight;
    }

    /**
     * Setter for weight
     *
     * @param int $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWeight()
    {
        $this->weight = null;
        return $this;
    }
}

