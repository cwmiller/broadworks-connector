<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:934","type":"sequence"}]
 */
class GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting
{
    /**
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:934
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maximumRerouteAttemptsWithinPriority = null;

    /**
     * @ElementName priorityWeightedTrunkGroupList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
     * @Nillable
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:934
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $priorityWeightedTrunkGroupList = null;

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
    public function setPriorityWeightedTrunkGroupList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList $priorityWeightedTrunkGroupList = null)
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

