<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventType
 *
 * Criteria for searching for a particular fully specified DeviceManagement event type.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:752","type":"sequence"}]
 */
class SearchCriteriaExactDeviceManagementEventType extends SearchCriteria
{

    /**
     * @ElementName dmEventType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:752
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

