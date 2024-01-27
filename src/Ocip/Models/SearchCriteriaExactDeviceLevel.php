<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceLevel
 *
 * Criteria for searching for a particular device level.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:853","type":"sequence"}]
 */
class SearchCriteriaExactDeviceLevel extends SearchCriteria
{
    /**
     * @ElementName deviceLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel
     * @Group 972fbf832439609ec8f2765c5637c3f1:853
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel|null
     */
    protected $deviceLevel = null;

    /**
     * Getter for deviceLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel
     * @return $this
     */
    public function setDeviceLevel(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceLevel()
    {
        $this->deviceLevel = null;
        return $this;
    }
}

