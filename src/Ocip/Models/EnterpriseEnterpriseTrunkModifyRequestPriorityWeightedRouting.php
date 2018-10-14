<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkModifyRequestPriorityWeightedRouting
 */
class EnterpriseEnterpriseTrunkModifyRequestPriorityWeightedRouting
{

    /**
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @var int|null
     */
    private $maximumRerouteAttemptsWithinPriority = null;

    /**
     * @ElementName priorityWeightedTrunkGroupList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList|null
     */
    public function getPriorityWeightedTrunkGroupList()
    {
        return $this->priorityWeightedTrunkGroupList;
    }

    /**
     * Setter for priorityWeightedTrunkGroupList
     *
     * @ElementName priorityWeightedTrunkGroupList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList|null $priorityWeightedTrunkGroupList
     * @return $this
     */
    public function setPriorityWeightedTrunkGroupList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList $priorityWeightedTrunkGroupList)
    {
        $this->priorityWeightedTrunkGroupList = $priorityWeightedTrunkGroupList;
        return $this;
    }


}

