<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceQueueStatusResponse
 *
 * Contains Call Center queue status and a table with column headings: 
 *         "User Id", "First Name", "Last Name", "Phone Number", "Extension", "Department", "Email Address".
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:4641","type":"sequence"}]
 */
class GroupCallCenterGetInstanceQueueStatusResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberOfCallsQueuedNow
     * @Type int
     * @Group e2c537e3e39483b96620673a7012ffdd:4641
     * @var int|null
     */
    private $numberOfCallsQueuedNow = null;

    /**
     * @ElementName agentsCurrentlyStaffed
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:4641
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentsCurrentlyStaffed = null;

    /**
     * Getter for numberOfCallsQueuedNow
     *
     * @return int
     */
    public function getNumberOfCallsQueuedNow()
    {
        return $this->numberOfCallsQueuedNow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsQueuedNow;
    }

    /**
     * Setter for numberOfCallsQueuedNow
     *
     * @param int $numberOfCallsQueuedNow
     * @return $this
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow)
    {
        $this->numberOfCallsQueuedNow = $numberOfCallsQueuedNow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsQueuedNow()
    {
        $this->numberOfCallsQueuedNow = null;
        return $this;
    }

    /**
     * Getter for agentsCurrentlyStaffed
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAgentsCurrentlyStaffed()
    {
        return $this->agentsCurrentlyStaffed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentsCurrentlyStaffed;
    }

    /**
     * Setter for agentsCurrentlyStaffed
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentsCurrentlyStaffed
     * @return $this
     */
    public function setAgentsCurrentlyStaffed(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentsCurrentlyStaffed)
    {
        $this->agentsCurrentlyStaffed = $agentsCurrentlyStaffed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentsCurrentlyStaffed()
    {
        $this->agentsCurrentlyStaffed = null;
        return $this;
    }


}

