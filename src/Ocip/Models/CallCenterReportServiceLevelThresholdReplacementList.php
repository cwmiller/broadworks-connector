<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportServiceLevelThresholdReplacementList
 *
 * A list of call center reporting service level threshold seconds that replaces a previously configured list.
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6781","type":"sequence"}]
 */
class CallCenterReportServiceLevelThresholdReplacementList
{

    /**
     * @ElementName serviceLevelThresholdSeconds
     * @Type int
     * @Array
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6781
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

