<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceLevel
 *
 * Criteria for searching for a particular device level.
 */
class SearchCriteriaExactDeviceLevel extends SearchCriteria
{

    /**
     * @ElementName deviceLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel|null
     */
    private $deviceLevel = null;

    /**
     * Getter for deviceLevel
     *
     * @ElementName deviceLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel|null
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @ElementName deviceLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel|null $deviceLevel
     * @return $this
     */
    public function setDeviceLevel(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }


}

