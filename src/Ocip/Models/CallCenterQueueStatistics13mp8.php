<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterQueueStatistics13mp8
 *
 * Contains Call Center Queue statistics.
 */
class CallCenterQueueStatistics13mp8
{

    /**
     * @ElementName numberOfIncomingCalls
     * @var int|null
     */
    private $numberOfIncomingCalls = null;

    /**
     * @ElementName numberOfCallsQueued
     * @var int|null
     */
    private $numberOfCallsQueued = null;

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
     * @ElementName averageTimeWithAgentSeconds
     * @var int|null
     */
    private $averageTimeWithAgentSeconds = null;

    /**
     * @ElementName averageTimeInQueueSeconds
     * @var int|null
     */
    private $averageTimeInQueueSeconds = null;

    /**
     * @ElementName averageNumberOfAgentsBusy
     * @var string|null
     */
    private $averageNumberOfAgentsBusy = null;

    /**
     * @ElementName averageNumberOfAgentsLoggedOff
     * @var string|null
     */
    private $averageNumberOfAgentsLoggedOff = null;

    /**
     * @ElementName averageHoldTimeBeforeCallLossSeconds
     * @var int|null
     */
    private $averageHoldTimeBeforeCallLossSeconds = null;

    /**
     * Getter for numberOfIncomingCalls
     *
     * @ElementName numberOfIncomingCalls
     * @return int|null
     */
    public function getNumberOfIncomingCalls()
    {
        return $this->numberOfIncomingCalls;
    }

    /**
     * Setter for numberOfIncomingCalls
     *
     * @ElementName numberOfIncomingCalls
     * @param int|null $numberOfIncomingCalls
     * @return $this
     */
    public function setNumberOfIncomingCalls($numberOfIncomingCalls)
    {
        $this->numberOfIncomingCalls = $numberOfIncomingCalls;
        return $this;
    }

    /**
     * Getter for numberOfCallsQueued
     *
     * @ElementName numberOfCallsQueued
     * @return int|null
     */
    public function getNumberOfCallsQueued()
    {
        return $this->numberOfCallsQueued;
    }

    /**
     * Setter for numberOfCallsQueued
     *
     * @ElementName numberOfCallsQueued
     * @param int|null $numberOfCallsQueued
     * @return $this
     */
    public function setNumberOfCallsQueued($numberOfCallsQueued)
    {
        $this->numberOfCallsQueued = $numberOfCallsQueued;
        return $this;
    }

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
     * Getter for averageTimeWithAgentSeconds
     *
     * @ElementName averageTimeWithAgentSeconds
     * @return int|null
     */
    public function getAverageTimeWithAgentSeconds()
    {
        return $this->averageTimeWithAgentSeconds;
    }

    /**
     * Setter for averageTimeWithAgentSeconds
     *
     * @ElementName averageTimeWithAgentSeconds
     * @param int|null $averageTimeWithAgentSeconds
     * @return $this
     */
    public function setAverageTimeWithAgentSeconds($averageTimeWithAgentSeconds)
    {
        $this->averageTimeWithAgentSeconds = $averageTimeWithAgentSeconds;
        return $this;
    }

    /**
     * Getter for averageTimeInQueueSeconds
     *
     * @ElementName averageTimeInQueueSeconds
     * @return int|null
     */
    public function getAverageTimeInQueueSeconds()
    {
        return $this->averageTimeInQueueSeconds;
    }

    /**
     * Setter for averageTimeInQueueSeconds
     *
     * @ElementName averageTimeInQueueSeconds
     * @param int|null $averageTimeInQueueSeconds
     * @return $this
     */
    public function setAverageTimeInQueueSeconds($averageTimeInQueueSeconds)
    {
        $this->averageTimeInQueueSeconds = $averageTimeInQueueSeconds;
        return $this;
    }

    /**
     * Getter for averageNumberOfAgentsBusy
     *
     * @ElementName averageNumberOfAgentsBusy
     * @return string|null
     */
    public function getAverageNumberOfAgentsBusy()
    {
        return $this->averageNumberOfAgentsBusy;
    }

    /**
     * Setter for averageNumberOfAgentsBusy
     *
     * @ElementName averageNumberOfAgentsBusy
     * @param string|null $averageNumberOfAgentsBusy
     * @return $this
     */
    public function setAverageNumberOfAgentsBusy($averageNumberOfAgentsBusy)
    {
        $this->averageNumberOfAgentsBusy = $averageNumberOfAgentsBusy;
        return $this;
    }

    /**
     * Getter for averageNumberOfAgentsLoggedOff
     *
     * @ElementName averageNumberOfAgentsLoggedOff
     * @return string|null
     */
    public function getAverageNumberOfAgentsLoggedOff()
    {
        return $this->averageNumberOfAgentsLoggedOff;
    }

    /**
     * Setter for averageNumberOfAgentsLoggedOff
     *
     * @ElementName averageNumberOfAgentsLoggedOff
     * @param string|null $averageNumberOfAgentsLoggedOff
     * @return $this
     */
    public function setAverageNumberOfAgentsLoggedOff($averageNumberOfAgentsLoggedOff)
    {
        $this->averageNumberOfAgentsLoggedOff = $averageNumberOfAgentsLoggedOff;
        return $this;
    }

    /**
     * Getter for averageHoldTimeBeforeCallLossSeconds
     *
     * @ElementName averageHoldTimeBeforeCallLossSeconds
     * @return int|null
     */
    public function getAverageHoldTimeBeforeCallLossSeconds()
    {
        return $this->averageHoldTimeBeforeCallLossSeconds;
    }

    /**
     * Setter for averageHoldTimeBeforeCallLossSeconds
     *
     * @ElementName averageHoldTimeBeforeCallLossSeconds
     * @param int|null $averageHoldTimeBeforeCallLossSeconds
     * @return $this
     */
    public function setAverageHoldTimeBeforeCallLossSeconds($averageHoldTimeBeforeCallLossSeconds)
    {
        $this->averageHoldTimeBeforeCallLossSeconds = $averageHoldTimeBeforeCallLossSeconds;
        return $this;
    }


}

