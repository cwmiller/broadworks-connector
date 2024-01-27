<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterQueueStatistics14sp9
 *
 * Contains Call Center Queue statistics.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7353","type":"sequence"}]
 */
class CallCenterQueueStatistics14sp9
{
    /**
     * @ElementName numberOfBusyOverflows
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var int|null
     */
    protected $numberOfBusyOverflows = null;

    /**
     * @ElementName numberOfCallsAnswered
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var int|null
     */
    protected $numberOfCallsAnswered = null;

    /**
     * @ElementName numberOfCallsAbandoned
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var int|null
     */
    protected $numberOfCallsAbandoned = null;

    /**
     * @ElementName numberOfCallsTransferred
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var int|null
     */
    protected $numberOfCallsTransferred = null;

    /**
     * @ElementName numberOfCallsTimedout
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var int|null
     */
    protected $numberOfCallsTimedout = null;

    /**
     * @ElementName averageNumberOfAgentsTalking
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var string|null
     */
    protected $averageNumberOfAgentsTalking = null;

    /**
     * @ElementName averageNumberOfAgentsStaffed
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var string|null
     */
    protected $averageNumberOfAgentsStaffed = null;

    /**
     * @ElementName averageWaitSeconds
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var int|null
     */
    protected $averageWaitSeconds = null;

    /**
     * @ElementName averageAbandonmentSeconds
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7353
     * @var int|null
     */
    protected $averageAbandonmentSeconds = null;

    /**
     * Getter for numberOfBusyOverflows
     *
     * @return int
     */
    public function getNumberOfBusyOverflows()
    {
        return $this->numberOfBusyOverflows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfBusyOverflows;
    }

    /**
     * Setter for numberOfBusyOverflows
     *
     * @param int $numberOfBusyOverflows
     * @return $this
     */
    public function setNumberOfBusyOverflows($numberOfBusyOverflows)
    {
        $this->numberOfBusyOverflows = $numberOfBusyOverflows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfBusyOverflows()
    {
        $this->numberOfBusyOverflows = null;
        return $this;
    }

    /**
     * Getter for numberOfCallsAnswered
     *
     * @return int
     */
    public function getNumberOfCallsAnswered()
    {
        return $this->numberOfCallsAnswered instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsAnswered;
    }

    /**
     * Setter for numberOfCallsAnswered
     *
     * @param int $numberOfCallsAnswered
     * @return $this
     */
    public function setNumberOfCallsAnswered($numberOfCallsAnswered)
    {
        $this->numberOfCallsAnswered = $numberOfCallsAnswered;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsAnswered()
    {
        $this->numberOfCallsAnswered = null;
        return $this;
    }

    /**
     * Getter for numberOfCallsAbandoned
     *
     * @return int
     */
    public function getNumberOfCallsAbandoned()
    {
        return $this->numberOfCallsAbandoned instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsAbandoned;
    }

    /**
     * Setter for numberOfCallsAbandoned
     *
     * @param int $numberOfCallsAbandoned
     * @return $this
     */
    public function setNumberOfCallsAbandoned($numberOfCallsAbandoned)
    {
        $this->numberOfCallsAbandoned = $numberOfCallsAbandoned;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsAbandoned()
    {
        $this->numberOfCallsAbandoned = null;
        return $this;
    }

    /**
     * Getter for numberOfCallsTransferred
     *
     * @return int
     */
    public function getNumberOfCallsTransferred()
    {
        return $this->numberOfCallsTransferred instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsTransferred;
    }

    /**
     * Setter for numberOfCallsTransferred
     *
     * @param int $numberOfCallsTransferred
     * @return $this
     */
    public function setNumberOfCallsTransferred($numberOfCallsTransferred)
    {
        $this->numberOfCallsTransferred = $numberOfCallsTransferred;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsTransferred()
    {
        $this->numberOfCallsTransferred = null;
        return $this;
    }

    /**
     * Getter for numberOfCallsTimedout
     *
     * @return int
     */
    public function getNumberOfCallsTimedout()
    {
        return $this->numberOfCallsTimedout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsTimedout;
    }

    /**
     * Setter for numberOfCallsTimedout
     *
     * @param int $numberOfCallsTimedout
     * @return $this
     */
    public function setNumberOfCallsTimedout($numberOfCallsTimedout)
    {
        $this->numberOfCallsTimedout = $numberOfCallsTimedout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsTimedout()
    {
        $this->numberOfCallsTimedout = null;
        return $this;
    }

    /**
     * Getter for averageNumberOfAgentsTalking
     *
     * @return string
     */
    public function getAverageNumberOfAgentsTalking()
    {
        return $this->averageNumberOfAgentsTalking instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageNumberOfAgentsTalking;
    }

    /**
     * Setter for averageNumberOfAgentsTalking
     *
     * @param string $averageNumberOfAgentsTalking
     * @return $this
     */
    public function setAverageNumberOfAgentsTalking($averageNumberOfAgentsTalking)
    {
        $this->averageNumberOfAgentsTalking = $averageNumberOfAgentsTalking;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageNumberOfAgentsTalking()
    {
        $this->averageNumberOfAgentsTalking = null;
        return $this;
    }

    /**
     * Getter for averageNumberOfAgentsStaffed
     *
     * @return string
     */
    public function getAverageNumberOfAgentsStaffed()
    {
        return $this->averageNumberOfAgentsStaffed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageNumberOfAgentsStaffed;
    }

    /**
     * Setter for averageNumberOfAgentsStaffed
     *
     * @param string $averageNumberOfAgentsStaffed
     * @return $this
     */
    public function setAverageNumberOfAgentsStaffed($averageNumberOfAgentsStaffed)
    {
        $this->averageNumberOfAgentsStaffed = $averageNumberOfAgentsStaffed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageNumberOfAgentsStaffed()
    {
        $this->averageNumberOfAgentsStaffed = null;
        return $this;
    }

    /**
     * Getter for averageWaitSeconds
     *
     * @return int
     */
    public function getAverageWaitSeconds()
    {
        return $this->averageWaitSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageWaitSeconds;
    }

    /**
     * Setter for averageWaitSeconds
     *
     * @param int $averageWaitSeconds
     * @return $this
     */
    public function setAverageWaitSeconds($averageWaitSeconds)
    {
        $this->averageWaitSeconds = $averageWaitSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageWaitSeconds()
    {
        $this->averageWaitSeconds = null;
        return $this;
    }

    /**
     * Getter for averageAbandonmentSeconds
     *
     * @return int
     */
    public function getAverageAbandonmentSeconds()
    {
        return $this->averageAbandonmentSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageAbandonmentSeconds;
    }

    /**
     * Setter for averageAbandonmentSeconds
     *
     * @param int $averageAbandonmentSeconds
     * @return $this
     */
    public function setAverageAbandonmentSeconds($averageAbandonmentSeconds)
    {
        $this->averageAbandonmentSeconds = $averageAbandonmentSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageAbandonmentSeconds()
    {
        $this->averageAbandonmentSeconds = null;
        return $this;
    }
}

