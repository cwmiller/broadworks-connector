<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventStatusCompleted
 *
 * Criteria for searching for a particular fully specified Device Management completed event status.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:898","type":"sequence"}]
 */
class SearchCriteriaExactDeviceManagementEventStatusCompleted extends SearchCriteria
{
    /**
     * @ElementName dmEventStatusCompleted
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted
     * @Group 972fbf832439609ec8f2765c5637c3f1:898
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

