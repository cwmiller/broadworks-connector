<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventType
 *
 * Criteria for searching for a particular fully specified DeviceManagement event
 * type.
 */
class SearchCriteriaExactDeviceManagementEventType extends SearchCriteria
{

    /**
     * @ElementName dmEventType
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null
     */
    private $dmEventType = null;

    /**
     * Getter for dmEventType
     *
     * @ElementName dmEventType
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null
     */
    public function getDmEventType()
    {
        return $this->dmEventType;
    }

    /**
     * Setter for dmEventType
     *
     * @ElementName dmEventType
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null $dmEventType
     * @return $this
     */
    public function setDmEventType(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType $dmEventType)
    {
        $this->dmEventType = $dmEventType;
        return $this;
    }


}

