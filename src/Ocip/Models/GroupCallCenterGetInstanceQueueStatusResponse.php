<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceQueueStatusResponse
 *
 * Contains Call Center queue status and a table with column headings: 
 *         "User Id", "First Name", "Last Name", "Phone Number", "Extension",
 * "Department", "Email Address".
 */
class GroupCallCenterGetInstanceQueueStatusResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberOfCallsQueuedNow
     * @var int|null
     */
    private $numberOfCallsQueuedNow = null;

    /**
     * @ElementName agentsCurrentlyStaffed
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentsCurrentlyStaffed = null;

    /**
     * Getter for numberOfCallsQueuedNow
     *
     * @ElementName numberOfCallsQueuedNow
     * @return int|null
     */
    public function getNumberOfCallsQueuedNow()
    {
        return $this->numberOfCallsQueuedNow;
    }

    /**
     * Setter for numberOfCallsQueuedNow
     *
     * @ElementName numberOfCallsQueuedNow
     * @param int|null $numberOfCallsQueuedNow
     * @return $this
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow)
    {
        $this->numberOfCallsQueuedNow = $numberOfCallsQueuedNow;
        return $this;
    }

    /**
     * Getter for agentsCurrentlyStaffed
     *
     * @ElementName agentsCurrentlyStaffed
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAgentsCurrentlyStaffed()
    {
        return $this->agentsCurrentlyStaffed;
    }

    /**
     * Setter for agentsCurrentlyStaffed
     *
     * @ElementName agentsCurrentlyStaffed
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $agentsCurrentlyStaffed
     * @return $this
     */
    public function setAgentsCurrentlyStaffed($agentsCurrentlyStaffed)
    {
        $this->agentsCurrentlyStaffed = $agentsCurrentlyStaffed;
        return $this;
    }


}

