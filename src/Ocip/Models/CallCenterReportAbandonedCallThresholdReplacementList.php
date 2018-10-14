<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportAbandonedCallThresholdReplacementList
 *
 * A list of call center reporting abandoned call threshold seconds that replaces a
 * previously configured list.
 */
class CallCenterReportAbandonedCallThresholdReplacementList
{

    /**
     * @ElementName abandonedCallThresholdSeconds
     * @var int[]
     */
    private $abandonedCallThresholdSeconds = array(
        
    );

    /**
     * Getter for abandonedCallThresholdSeconds
     *
     * @ElementName abandonedCallThresholdSeconds
     * @return int[]
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return $this->abandonedCallThresholdSeconds;
    }

    /**
     * Setter for abandonedCallThresholdSeconds
     *
     * @ElementName abandonedCallThresholdSeconds
     * @param int[] $abandonedCallThresholdSeconds
     * @return $this
     */
    public function setAbandonedCallThresholdSeconds(array $abandonedCallThresholdSeconds)
    {
        $this->abandonedCallThresholdSeconds = $abandonedCallThresholdSeconds;
        return $this;
    }

    /**
     * Adder for abandonedCallThresholdSeconds
     *
     * @ElementName abandonedCallThresholdSeconds
     * @param int $abandonedCallThresholdSeconds
     * @return $this
     */
    public function addAbandonedCallThresholdSeconds(int $abandonedCallThresholdSeconds)
    {
        $this->abandonedCallThresholdSeconds []= $abandonedCallThresholdSeconds;
        return $this;
    }


}

