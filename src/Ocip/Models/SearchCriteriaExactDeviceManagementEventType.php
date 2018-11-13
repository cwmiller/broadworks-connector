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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null
     */
    private $dmEventType = null;

    /**
     * Getter for dmEventType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType
     */
    public function getDmEventType()
    {
        return $this->dmEventType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventType;
    }

    /**
     * Setter for dmEventType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType $dmEventType
     * @return $this
     */
    public function setDmEventType(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType $dmEventType)
    {
        $this->dmEventType = $dmEventType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventType()
    {
        $this->dmEventType = null;
        return $this;
    }


}

