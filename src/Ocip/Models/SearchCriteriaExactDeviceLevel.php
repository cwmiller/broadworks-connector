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
     * @var string|null
     */
    private $deviceLevel = null;

    /**
     * Getter for deviceLevel
     *
     * @ElementName deviceLevel
     * @return string|null
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @ElementName deviceLevel
     * @param string|null $deviceLevel
     * @return $this
     */
    public function setDeviceLevel($deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }


}

