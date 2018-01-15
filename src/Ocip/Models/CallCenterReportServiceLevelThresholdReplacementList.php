<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportServiceLevelThresholdReplacementList
 *
 * A list of call center reporting service level threshold seconds that replaces a
 * previously configured list.
 */
class CallCenterReportServiceLevelThresholdReplacementList
{

    /**
     * @ElementName serviceLevelThresholdSeconds
     * @var int[]
     */
    private $serviceLevelThresholdSeconds = array(
        
    );

    /**
     * Getter for serviceLevelThresholdSeconds
     *
     * @ElementName serviceLevelThresholdSeconds
     * @return int[]
     */
    public function getServiceLevelThresholdSeconds()
    {
        return $this->serviceLevelThresholdSeconds;
    }

    /**
     * Setter for serviceLevelThresholdSeconds
     *
     * @ElementName serviceLevelThresholdSeconds
     * @param int[] $serviceLevelThresholdSeconds
     * @return $this
     */
    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds)
    {
        $this->serviceLevelThresholdSeconds = $serviceLevelThresholdSeconds;
        return $this;
    }

    /**
     * Adder for serviceLevelThresholdSeconds
     *
     * @ElementName serviceLevelThresholdSeconds
     * @param int $serviceLevelThresholdSeconds
     * @return $this
     */
    public function addServiceLevelThresholdSeconds($serviceLevelThresholdSeconds)
    {
        $this->serviceLevelThresholdSeconds []= $serviceLevelThresholdSeconds;
        return $this;
    }


}

