<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkAddRequest21PriorityWeightedRouting
 *
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:584","type":"sequence"}]
 */
class GroupEnterpriseTrunkAddRequest21PriorityWeightedRouting
{

    /**
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @Type int
     * @Group b9c14e2d80e4e7749688ca13ba233b44:584
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $maximumRerouteAttemptsWithinPriority = null;

    /**
     * @ElementName priorityWeightedTrunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:584
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    private $priorityWeightedTrunkGroup = array(
        
    );

    /**
     * Getter for maximumRerouteAttemptsWithinPriority
     *
     * @return int
     */
    public function getMaximumRerouteAttemptsWithinPriority()
    {
        return $this->maximumRerouteAttemptsWithinPriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumRerouteAttemptsWithinPriority;
    }

    /**
     * Setter for maximumRerouteAttemptsWithinPriority
     *
     * @param int $maximumRerouteAttemptsWithinPriority
     * @return $this
     */
    public function setMaximumRerouteAttemptsWithinPriority($maximumRerouteAttemptsWithinPriority)
    {
        $this->maximumRerouteAttemptsWithinPriority = $maximumRerouteAttemptsWithinPriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumRerouteAttemptsWithinPriority()
    {
        $this->maximumRerouteAttemptsWithinPriority = null;
        return $this;
    }

    /**
     * Getter for priorityWeightedTrunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    public function getPriorityWeightedTrunkGroup()
    {
        return $this->priorityWeightedTrunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityWeightedTrunkGroup;
    }

    /**
     * Setter for priorityWeightedTrunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup[] $priorityWeightedTrunkGroup
     * @return $this
     */
    public function setPriorityWeightedTrunkGroup(array $priorityWeightedTrunkGroup)
    {
        $this->priorityWeightedTrunkGroup = $priorityWeightedTrunkGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityWeightedTrunkGroup()
    {
        $this->priorityWeightedTrunkGroup = null;
        return $this;
    }

    /**
     * Adder for priorityWeightedTrunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkPriorityWeightedTrunkGroup $priorityWeightedTrunkGroup
     * @return $this
     */
    public function addPriorityWeightedTrunkGroup($priorityWeightedTrunkGroup)
    {
        $this->priorityWeightedTrunkGroup[] = $priorityWeightedTrunkGroup;
        return $this;
    }


}

