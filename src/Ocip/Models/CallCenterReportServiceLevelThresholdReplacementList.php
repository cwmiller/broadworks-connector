<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportServiceLevelThresholdReplacementList
 *
 * A list of call center reporting service level threshold seconds that replaces a previously configured list.
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7523","type":"sequence"}]
 */
class CallCenterReportServiceLevelThresholdReplacementList
{

    /**
     * @ElementName serviceLevelThresholdSeconds
     * @Type int
     * @Array
     * @Group e2c537e3e39483b96620673a7012ffdd:7523
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int[]
     */
    private $serviceLevelThresholdSeconds = array(
        
    );

    /**
     * Getter for serviceLevelThresholdSeconds
     *
     * @return int[]
     */
    public function getServiceLevelThresholdSeconds()
    {
        return $this->serviceLevelThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelThresholdSeconds;
    }

    /**
     * Setter for serviceLevelThresholdSeconds
     *
     * @param int[] $serviceLevelThresholdSeconds
     * @return $this
     */
    public function setServiceLevelThresholdSeconds(array $serviceLevelThresholdSeconds)
    {
        $this->serviceLevelThresholdSeconds = $serviceLevelThresholdSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelThresholdSeconds()
    {
        $this->serviceLevelThresholdSeconds = null;
        return $this;
    }

    /**
     * Adder for serviceLevelThresholdSeconds
     *
     * @param int $serviceLevelThresholdSeconds
     * @return $this
     */
    public function addServiceLevelThresholdSeconds(int $serviceLevelThresholdSeconds)
    {
        $this->serviceLevelThresholdSeconds[] = $serviceLevelThresholdSeconds;
        return $this;
    }


}

