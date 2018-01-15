<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterQueueStatistics14sp9
 *
 * Contains Call Center Queue statistics.
 */
class CallCenterQueueStatistics14sp9
{

    /**
     * @ElementName numberOfBusyOverflows
     * @var int|null
     */
    private $numberOfBusyOverflows = null;

    /**
     * @ElementName numberOfCallsAnswered
     * @var int|null
     */
    private $numberOfCallsAnswered = null;

    /**
     * @ElementName numberOfCallsAbandoned
     * @var int|null
     */
    private $numberOfCallsAbandoned = null;

    /**
     * @ElementName numberOfCallsTransferred
     * @var int|null
     */
    private $numberOfCallsTransferred = null;

    /**
     * @ElementName numberOfCallsTimedout
     * @var int|null
     */
    private $numberOfCallsTimedout = null;

    /**
     * @ElementName averageNumberOfAgentsTalking
     * @var string|null
     */
    private $averageNumberOfAgentsTalking = null;

    /**
     * @ElementName averageNumberOfAgentsStaffed
     * @var string|null
     */
    private $averageNumberOfAgentsStaffed = null;

    /**
     * @ElementName averageWaitSeconds
     * @var int|null
     */
    private $averageWaitSeconds = null;

    /**
     * @ElementName averageAbandonmentSeconds
     * @var int|null
     */
    private $averageAbandonmentSeconds = null;

    /**
     * Getter for numberOfBusyOverflows
     *
     * @ElementName numberOfBusyOverflows
     * @return int|null
     */
    public function getNumberOfBusyOverflows()
    {
        return $this->numberOfBusyOverflows;
    }

    /**
     * Setter for numberOfBusyOverflows
     *
     * @ElementName numberOfBusyOverflows
     * @param int|null $numberOfBusyOverflows
     * @return $this
     */
    public function setNumberOfBusyOverflows($numberOfBusyOverflows)
    {
        $this->numberOfBusyOverflows = $numberOfBusyOverflows;
        return $this;
    }

    /**
     * Getter for numberOfCallsAnswered
     *
     * @ElementName numberOfCallsAnswered
     * @return int|null
     */
    public function getNumberOfCallsAnswered()
    {
        return $this->numberOfCallsAnswered;
    }

    /**
     * Setter for numberOfCallsAnswered
     *
     * @ElementName numberOfCallsAnswered
     * @param int|null $numberOfCallsAnswered
     * @return $this
     */
    public function setNumberOfCallsAnswered($numberOfCallsAnswered)
    {
        $this->numberOfCallsAnswered = $numberOfCallsAnswered;
        return $this;
    }

    /**
     * Getter for numberOfCallsAbandoned
     *
     * @ElementName numberOfCallsAbandoned
     * @return int|null
     */
    public function getNumberOfCallsAbandoned()
    {
        return $this->numberOfCallsAbandoned;
    }

    /**
     * Setter for numberOfCallsAbandoned
     *
     * @ElementName numberOfCallsAbandoned
     * @param int|null $numberOfCallsAbandoned
     * @return $this
     */
    public function setNumberOfCallsAbandoned($numberOfCallsAbandoned)
    {
        $this->numberOfCallsAbandoned = $numberOfCallsAbandoned;
        return $this;
    }

    /**
     * Getter for numberOfCallsTransferred
     *
     * @ElementName numberOfCallsTransferred
     * @return int|null
     */
    public function getNumberOfCallsTransferred()
    {
        return $this->numberOfCallsTransferred;
    }

    /**
     * Setter for numberOfCallsTransferred
     *
     * @ElementName numberOfCallsTransferred
     * @param int|null $numberOfCallsTransferred
     * @return $this
     */
    public function setNumberOfCallsTransferred($numberOfCallsTransferred)
    {
        $this->numberOfCallsTransferred = $numberOfCallsTransferred;
        return $this;
    }

    /**
     * Getter for numberOfCallsTimedout
     *
     * @ElementName numberOfCallsTimedout
     * @return int|null
     */
    public function getNumberOfCallsTimedout()
    {
        return $this->numberOfCallsTimedout;
    }

    /**
     * Setter for numberOfCallsTimedout
     *
     * @ElementName numberOfCallsTimedout
     * @param int|null $numberOfCallsTimedout
     * @return $this
     */
    public function setNumberOfCallsTimedout($numberOfCallsTimedout)
    {
        $this->numberOfCallsTimedout = $numberOfCallsTimedout;
        return $this;
    }

    /**
     * Getter for averageNumberOfAgentsTalking
     *
     * @ElementName averageNumberOfAgentsTalking
     * @return string|null
     */
    public function getAverageNumberOfAgentsTalking()
    {
        return $this->averageNumberOfAgentsTalking;
    }

    /**
     * Setter for averageNumberOfAgentsTalking
     *
     * @ElementName averageNumberOfAgentsTalking
     * @param string|null $averageNumberOfAgentsTalking
     * @return $this
     */
    public function setAverageNumberOfAgentsTalking($averageNumberOfAgentsTalking)
    {
        $this->averageNumberOfAgentsTalking = $averageNumberOfAgentsTalking;
        return $this;
    }

    /**
     * Getter for averageNumberOfAgentsStaffed
     *
     * @ElementName averageNumberOfAgentsStaffed
     * @return string|null
     */
    public function getAverageNumberOfAgentsStaffed()
    {
        return $this->averageNumberOfAgentsStaffed;
    }

    /**
     * Setter for averageNumberOfAgentsStaffed
     *
     * @ElementName averageNumberOfAgentsStaffed
     * @param string|null $averageNumberOfAgentsStaffed
     * @return $this
     */
    public function setAverageNumberOfAgentsStaffed($averageNumberOfAgentsStaffed)
    {
        $this->averageNumberOfAgentsStaffed = $averageNumberOfAgentsStaffed;
        return $this;
    }

    /**
     * Getter for averageWaitSeconds
     *
     * @ElementName averageWaitSeconds
     * @return int|null
     */
    public function getAverageWaitSeconds()
    {
        return $this->averageWaitSeconds;
    }

    /**
     * Setter for averageWaitSeconds
     *
     * @ElementName averageWaitSeconds
     * @param int|null $averageWaitSeconds
     * @return $this
     */
    public function setAverageWaitSeconds($averageWaitSeconds)
    {
        $this->averageWaitSeconds = $averageWaitSeconds;
        return $this;
    }

    /**
     * Getter for averageAbandonmentSeconds
     *
     * @ElementName averageAbandonmentSeconds
     * @return int|null
     */
    public function getAverageAbandonmentSeconds()
    {
        return $this->averageAbandonmentSeconds;
    }

    /**
     * Setter for averageAbandonmentSeconds
     *
     * @ElementName averageAbandonmentSeconds
     * @param int|null $averageAbandonmentSeconds
     * @return $this
     */
    public function setAverageAbandonmentSeconds($averageAbandonmentSeconds)
    {
        $this->averageAbandonmentSeconds = $averageAbandonmentSeconds;
        return $this;
    }


}

