<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventStatusCompleted
 *
 * Criteria for searching for a particular fully specified Device Management
 * completed event status.
 */
class SearchCriteriaExactDeviceManagementEventStatusCompleted extends SearchCriteria
{

    /**
     * @ElementName dmEventStatusCompleted
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted|null
     */
    private $dmEventStatusCompleted = null;

    /**
     * Getter for dmEventStatusCompleted
     *
     * @ElementName dmEventStatusCompleted
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted|null
     */
    public function getDmEventStatusCompleted()
    {
        return $this->dmEventStatusCompleted;
    }

    /**
     * Setter for dmEventStatusCompleted
     *
     * @ElementName dmEventStatusCompleted
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted|null $dmEventStatusCompleted
     * @return $this
     */
    public function setDmEventStatusCompleted(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted $dmEventStatusCompleted)
    {
        $this->dmEventStatusCompleted = $dmEventStatusCompleted;
        return $this;
    }


}

