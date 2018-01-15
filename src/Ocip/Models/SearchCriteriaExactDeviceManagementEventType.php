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
     * @var string|null
     */
    private $dmEventType = null;

    /**
     * Getter for dmEventType
     *
     * @ElementName dmEventType
     * @return string|null
     */
    public function getDmEventType()
    {
        return $this->dmEventType;
    }

    /**
     * Setter for dmEventType
     *
     * @ElementName dmEventType
     * @param string|null $dmEventType
     * @return $this
     */
    public function setDmEventType($dmEventType)
    {
        $this->dmEventType = $dmEventType;
        return $this;
    }


}

