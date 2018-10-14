<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending
 *
 * Criteria for searching for a particular fully specified Device Management event
 * in progress or pending status.
 */
class SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending extends SearchCriteria
{

    /**
     * @ElementName dmEventStatusInProgressOrPending
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending|null
     */
    private $dmEventStatusInProgressOrPending = null;

    /**
     * Getter for dmEventStatusInProgressOrPending
     *
     * @ElementName dmEventStatusInProgressOrPending
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending|null
     */
    public function getDmEventStatusInProgressOrPending()
    {
        return $this->dmEventStatusInProgressOrPending;
    }

    /**
     * Setter for dmEventStatusInProgressOrPending
     *
     * @ElementName dmEventStatusInProgressOrPending
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending|null $dmEventStatusInProgressOrPending
     * @return $this
     */
    public function setDmEventStatusInProgressOrPending(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending $dmEventStatusInProgressOrPending)
    {
        $this->dmEventStatusInProgressOrPending = $dmEventStatusInProgressOrPending;
        return $this;
    }


}

