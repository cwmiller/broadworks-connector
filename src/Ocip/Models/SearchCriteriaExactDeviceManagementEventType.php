<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventType
 *
 * Criteria for searching for a particular fully specified DeviceManagement event type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:928","type":"sequence"}]
 */
class SearchCriteriaExactDeviceManagementEventType extends SearchCriteria
{
    /**
     * @ElementName dmEventType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType
     * @Group 972fbf832439609ec8f2765c5637c3f1:928
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null
     */
    protected $dmEventType = null;

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

