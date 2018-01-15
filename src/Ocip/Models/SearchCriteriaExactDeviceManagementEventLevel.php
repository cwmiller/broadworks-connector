<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventLevel
 *
 * Criteria for searching for a particular fully specified DeviceManagement event
 * level.
 */
class SearchCriteriaExactDeviceManagementEventLevel extends SearchCriteria
{

    /**
     * @ElementName dmEventLevel
     * @var string|null
     */
    private $dmEventLevel = null;

    /**
     * Getter for dmEventLevel
     *
     * @ElementName dmEventLevel
     * @return string|null
     */
    public function getDmEventLevel()
    {
        return $this->dmEventLevel;
    }

    /**
     * Setter for dmEventLevel
     *
     * @ElementName dmEventLevel
     * @param string|null $dmEventLevel
     * @return $this
     */
    public function setDmEventLevel($dmEventLevel)
    {
        $this->dmEventLevel = $dmEventLevel;
        return $this;
    }


}

