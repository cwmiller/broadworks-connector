<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkPriorityWeightedTrunkGroup
 *
 * Trunk group details (order and weight) for each trunk group
 *
 * @Groups [{"id":"762df656d5a3c5800001b37599b1e4ce:1773","type":"sequence"}]
 */
class GroupEnterpriseTrunkPriorityWeightedTrunkGroup
{

    /**
     * @ElementName trunkGroup
     * @Type string
     * @Group 762df656d5a3c5800001b37599b1e4ce:1773
     * @var string|null
     */
    private $trunkGroup = null;

    /**
     * @ElementName priority
     * @Type int
     * @Group 762df656d5a3c5800001b37599b1e4ce:1773
     * @var int|null
     */
    private $priority = null;

    /**
     * @ElementName weight
     * @Type int
     * @Group 762df656d5a3c5800001b37599b1e4ce:1773
     * @var int|null
     */
    private $weight = null;

    /**
     * Getter for trunkGroup
     *
     * @return string
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param string $trunkGroup
     * @return $this
     */
    public function setTrunkGroup($trunkGroup)
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

