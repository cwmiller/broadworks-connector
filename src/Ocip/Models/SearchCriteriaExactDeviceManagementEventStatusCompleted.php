<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventStatusCompleted
 *
 * Criteria for searching for a particular fully specified Device Management completed event status.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:864","type":"sequence"}]
 */
class SearchCriteriaExactDeviceManagementEventStatusCompleted extends SearchCriteria
{

    /**
     * @ElementName dmEventStatusCompleted
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted
     * @Group f0ada2681ca347fa83b464734259b304:864
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted|null
     */
    protected $dmEventStatusCompleted = null;

    /**
     * Getter for dmEventStatusCompleted
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted
     */
    public function getDmEventStatusCompleted()
    {
        return $this->dmEventStatusCompleted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventStatusCompleted;
    }

    /**
     * Setter for dmEventStatusCompleted
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted $dmEventStatusCompleted
     * @return $this
     */
    public function setDmEventStatusCompleted(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted $dmEventStatusCompleted)
    {
        $this->dmEventStatusCompleted = $dmEventStatusCompleted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventStatusCompleted()
    {
        $this->dmEventStatusCompleted = null;
        return $this;
    }


}

