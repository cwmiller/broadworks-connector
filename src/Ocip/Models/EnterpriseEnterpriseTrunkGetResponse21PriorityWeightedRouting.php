<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetResponse21PriorityWeightedRouting
 */
class EnterpriseEnterpriseTrunkGetResponse21PriorityWeightedRouting
{

    /**
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @var int|null
     */
    private $maximumRerouteAttemptsWithinPriority = null;

    /**
     * @ElementName priorityWeightedTrunkGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    private $priorityWeightedTrunkGroup = array(
        
    );

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
     * Getter for priorityWeightedTrunkGroup
     *
     * @ElementName priorityWeightedTrunkGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    public function getPriorityWeightedTrunkGroup()
    {
        return $this->priorityWeightedTrunkGroup;
    }

    /**
     * Setter for priorityWeightedTrunkGroup
     *
     * @ElementName priorityWeightedTrunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[] $priorityWeightedTrunkGroup
     * @return $this
     */
    public function setPriorityWeightedTrunkGroup(array $priorityWeightedTrunkGroup)
    {
        $this->priorityWeightedTrunkGroup = $priorityWeightedTrunkGroup;
        return $this;
    }

    /**
     * Adder for priorityWeightedTrunkGroup
     *
     * @ElementName priorityWeightedTrunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup $priorityWeightedTrunkGroup
     * @return $this
     */
    public function addPriorityWeightedTrunkGroup($priorityWeightedTrunkGroup)
    {
        $this->priorityWeightedTrunkGroup []= $priorityWeightedTrunkGroup;
        return $this;
    }


}

