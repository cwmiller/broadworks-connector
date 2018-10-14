<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkPriorityWeightedTrunkGroup
 *
 * Trunk group details (order and weight) for each trunk group
 */
class EnterpriseTrunkPriorityWeightedTrunkGroup
{

    /**
     * @ElementName trunkGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey|null
     */
    private $trunkGroup = null;

    /**
     * @ElementName priority
     * @var int|null
     */
    private $priority = null;

    /**
     * @ElementName weight
     * @var int|null
     */
    private $weight = null;

    /**
     * Getter for trunkGroup
     *
     * @ElementName trunkGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey|null
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @ElementName trunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey|null $trunkGroup
     * @return $this
     */
    public function setTrunkGroup(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * Getter for priority
     *
     * @ElementName priority
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Setter for priority
     *
     * @ElementName priority
     * @param int|null $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Getter for weight
     *
     * @ElementName weight
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Setter for weight
     *
     * @ElementName weight
     * @param int|null $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}

