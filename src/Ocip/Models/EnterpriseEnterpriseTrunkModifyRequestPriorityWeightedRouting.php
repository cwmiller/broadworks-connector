<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkModifyRequestPriorityWeightedRouting
 *
 * @Groups [{"id":"5472d4b45ad0ad56e4f82361e2a66a53:438","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkModifyRequestPriorityWeightedRouting
{

    /**
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @Type int
     * @Optional
     * @Group 5472d4b45ad0ad56e4f82361e2a66a53:438
     * @var int|null
     */
    private $maximumRerouteAttemptsWithinPriority = null;

    /**
     * @ElementName priorityWeightedTrunkGroupList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList
     * @Nillable
     * @Optional
     * @Group 5472d4b45ad0ad56e4f82361e2a66a53:438
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList|null
     */
    public function getPriorityWeightedTrunkGroupList()
    {
        return $this->priorityWeightedTrunkGroupList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityWeightedTrunkGroupList;
    }

    /**
     * Setter for priorityWeightedTrunkGroupList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList|null $priorityWeightedTrunkGroupList
     * @return $this
     */
    public function setPriorityWeightedTrunkGroupList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseEnterpriseTrunkPriorityWeightedTrunkGroupList $priorityWeightedTrunkGroupList)
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

