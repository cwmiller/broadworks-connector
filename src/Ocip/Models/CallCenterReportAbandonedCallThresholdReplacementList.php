<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportAbandonedCallThresholdReplacementList
 *
 * A list of call center reporting abandoned call threshold seconds that replaces a previously configured list.
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6634","type":"sequence"}]
 */
class CallCenterReportAbandonedCallThresholdReplacementList
{

    /**
     * @ElementName abandonedCallThresholdSeconds
     * @Type int
     * @Array
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6634
     * @var int[]
     */
    private $abandonedCallThresholdSeconds = array(
        
    );

    /**
     * Getter for abandonedCallThresholdSeconds
     *
     * @return int[]
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return $this->abandonedCallThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallThresholdSeconds;
    }

    /**
     * Setter for abandonedCallThresholdSeconds
     *
     * @param int[] $abandonedCallThresholdSeconds
     * @return $this
     */
    public function setAbandonedCallThresholdSeconds(array $abandonedCallThresholdSeconds)
    {
        $this->abandonedCallThresholdSeconds = $abandonedCallThresholdSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbandonedCallThresholdSeconds()
    {
        $this->abandonedCallThresholdSeconds = null;
        return $this;
    }

    /**
     * Adder for abandonedCallThresholdSeconds
     *
     * @param int $abandonedCallThresholdSeconds
     * @return $this
     */
    public function addAbandonedCallThresholdSeconds(int $abandonedCallThresholdSeconds)
    {
        $this->abandonedCallThresholdSeconds[] = $abandonedCallThresholdSeconds;
        return $this;
    }


}

