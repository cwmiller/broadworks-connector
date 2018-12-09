<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting
 *
 * @Groups [{"id":"762df656d5a3c5800001b37599b1e4ce:827","type":"sequence"}]
 */
class GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting
{

    /**
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @Type int
     * @Optional
     * @Group 762df656d5a3c5800001b37599b1e4ce:827
     * @var int|null
     */
    private $maximumRerouteAttemptsWithinPriority = null;

    /**
     * @ElementName priorityWeightedTrunkGroupList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
     * @Nillable
     * @Optional
     * @Group 762df656d5a3c5800001b37599b1e4ce:827
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $priorityWeightedTrunkGroupList = null;

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
     * Getter for priorityWeightedTrunkGroupList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList|null
     */
    public function getPriorityWeightedTrunkGroupList()
    {
        return $this->priorityWeightedTrunkGroupList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityWeightedTrunkGroupList;
    }

    /**
     * Setter for priorityWeightedTrunkGroupList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList|null $priorityWeightedTrunkGroupList
     * @return $this
     */
    public function setPriorityWeightedTrunkGroupList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList $priorityWeightedTrunkGroupList)
    {
        if ($priorityWeightedTrunkGroupList === null) {
            $this->priorityWeightedTrunkGroupList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->priorityWeightedTrunkGroupList = $priorityWeightedTrunkGroupList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityWeightedTrunkGroupList()
    {
        $this->priorityWeightedTrunkGroupList = null;
        return $this;
    }


}

