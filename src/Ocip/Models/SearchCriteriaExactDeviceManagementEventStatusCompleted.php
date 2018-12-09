<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventStatusCompleted
 *
 * Criteria for searching for a particular fully specified Device Management completed event status.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:722","type":"sequence"}]
 */
class SearchCriteriaExactDeviceManagementEventStatusCompleted extends SearchCriteria
{

    /**
     * @ElementName dmEventStatusCompleted
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:722
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusCompleted|null
     */
    private $dmEventStatusCompleted = null;

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

