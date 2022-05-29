<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventLevel
 *
 * Criteria for searching for a particular fully specified DeviceManagement event level.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:849","type":"sequence"}]
 */
class SearchCriteriaExactDeviceManagementEventLevel extends SearchCriteria
{

    /**
     * @ElementName dmEventLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel
     * @Group f0ada2681ca347fa83b464734259b304:849
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel|null
     */
    protected $dmEventLevel = null;

    /**
     * Getter for dmEventLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel
     */
    public function getDmEventLevel()
    {
        return $this->dmEventLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventLevel;
    }

    /**
     * Setter for dmEventLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel $dmEventLevel
     * @return $this
     */
    public function setDmEventLevel(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel $dmEventLevel)
    {
        $this->dmEventLevel = $dmEventLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventLevel()
    {
        $this->dmEventLevel = null;
        return $this;
    }


}

