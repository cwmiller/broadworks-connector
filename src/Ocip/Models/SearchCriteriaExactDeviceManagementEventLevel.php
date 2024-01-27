<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventLevel
 *
 * Criteria for searching for a particular fully specified DeviceManagement event level.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:883","type":"sequence"}]
 */
class SearchCriteriaExactDeviceManagementEventLevel extends SearchCriteria
{
    /**
     * @ElementName dmEventLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel
     * @Group 972fbf832439609ec8f2765c5637c3f1:883
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

