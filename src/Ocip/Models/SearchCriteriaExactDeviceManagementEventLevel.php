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
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel|null
     */
    private $dmEventLevel = null;

    /**
     * Getter for dmEventLevel
     *
     * @ElementName dmEventLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel|null
     */
    public function getDmEventLevel()
    {
        return $this->dmEventLevel;
    }

    /**
     * Setter for dmEventLevel
     *
     * @ElementName dmEventLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel|null $dmEventLevel
     * @return $this
     */
    public function setDmEventLevel(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel $dmEventLevel)
    {
        $this->dmEventLevel = $dmEventLevel;
        return $this;
    }


}

