<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting
 */
class GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting
{

    /**
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @var int|null
     */
    private $maximumRerouteAttemptsWithinPriority = null;

    /**
     * @ElementName priorityWeightedTrunkGroupList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList|null
     */
    private $priorityWeightedTrunkGroupList = null;

    /**
     * Getter for maximumRerouteAttemptsWithinPriority
     *
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @return int|null
     */
    public function getMaximumRerouteAttemptsWithinPriority()
    {
        return $this->maximumRerouteAttemptsWithinPriority;
    }

    /**
     * Setter for maximumRerouteAttemptsWithinPriority
     *
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @param int|null $maximumRerouteAttemptsWithinPriority
     * @return $this
     */
    public function setMaximumRerouteAttemptsWithinPriority($maximumRerouteAttemptsWithinPriority)
    {
        $this->maximumRerouteAttemptsWithinPriority = $maximumRerouteAttemptsWithinPriority;
        return $this;
    }

    /**
     * Getter for priorityWeightedTrunkGroupList
     *
     * @ElementName priorityWeightedTrunkGroupList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList|null
     */
    public function getPriorityWeightedTrunkGroupList()
    {
        return $this->priorityWeightedTrunkGroupList;
    }

    /**
     * Setter for priorityWeightedTrunkGroupList
     *
     * @ElementName priorityWeightedTrunkGroupList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList|null $priorityWeightedTrunkGroupList
     * @return $this
     */
    public function setPriorityWeightedTrunkGroupList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList $priorityWeightedTrunkGroupList)
    {
        $this->priorityWeightedTrunkGroupList = $priorityWeightedTrunkGroupList;
        return $this;
    }


}

