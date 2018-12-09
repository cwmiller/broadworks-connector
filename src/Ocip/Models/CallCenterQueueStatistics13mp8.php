<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterQueueStatistics13mp8
 *
 * Contains Call Center Queue statistics.
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:38530","type":"sequence"}]
 */
class CallCenterQueueStatistics13mp8
{

    /**
     * @ElementName numberOfIncomingCalls
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var int|null
     */
    private $numberOfIncomingCalls = null;

    /**
     * @ElementName numberOfCallsQueued
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var int|null
     */
    private $numberOfCallsQueued = null;

    /**
     * @ElementName numberOfBusyOverflows
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var int|null
     */
    private $numberOfBusyOverflows = null;

    /**
     * @ElementName numberOfCallsAnswered
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var int|null
     */
    private $numberOfCallsAnswered = null;

    /**
     * @ElementName averageTimeWithAgentSeconds
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var int|null
     */
    private $averageTimeWithAgentSeconds = null;

    /**
     * @ElementName averageTimeInQueueSeconds
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var int|null
     */
    private $averageTimeInQueueSeconds = null;

    /**
     * @ElementName averageNumberOfAgentsBusy
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var string|null
     */
    private $averageNumberOfAgentsBusy = null;

    /**
     * @ElementName averageNumberOfAgentsLoggedOff
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var string|null
     */
    private $averageNumberOfAgentsLoggedOff = null;

    /**
     * @ElementName averageHoldTimeBeforeCallLossSeconds
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38530
     * @var int|null
     */
    private $averageHoldTimeBeforeCallLossSeconds = null;

    /**
     * Getter for numberOfIncomingCalls
     *
     * @return int
     */
    public function getNumberOfIncomingCalls()
    {
        return $this->numberOfIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfIncomingCalls;
    }

    /**
     * Setter for numberOfIncomingCalls
     *
     * @param int $numberOfIncomingCalls
     * @return $this
     */
    public function setNumberOfIncomingCalls($numberOfIncomingCalls)
    {
        $this->numberOfIncomingCalls = $numberOfIncomingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfIncomingCalls()
    {
        $this->numberOfIncomingCalls = null;
        return $this;
    }

    /**
     * Getter for numberOfCallsQueued
     *
     * @return int
     */
    public function getNumberOfCallsQueued()
    {
        return $this->numberOfCallsQueued instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsQueued;
    }

    /**
     * Setter for numberOfCallsQueued
     *
     * @param int $numberOfCallsQueued
     * @return $this
     */
    public function setNumberOfCallsQueued($numberOfCallsQueued)
    {
        $this->numberOfCallsQueued = $numberOfCallsQueued;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsQueued()
    {
        $this->numberOfCallsQueued = null;
        return $this;
    }

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
     * Getter for averageTimeWithAgentSeconds
     *
     * @return int
     */
    public function getAverageTimeWithAgentSeconds()
    {
        return $this->averageTimeWithAgentSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageTimeWithAgentSeconds;
    }

    /**
     * Setter for averageTimeWithAgentSeconds
     *
     * @param int $averageTimeWithAgentSeconds
     * @return $this
     */
    public function setAverageTimeWithAgentSeconds($averageTimeWithAgentSeconds)
    {
        $this->averageTimeWithAgentSeconds = $averageTimeWithAgentSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageTimeWithAgentSeconds()
    {
        $this->averageTimeWithAgentSeconds = null;
        return $this;
    }

    /**
     * Getter for averageTimeInQueueSeconds
     *
     * @return int
     */
    public function getAverageTimeInQueueSeconds()
    {
        return $this->averageTimeInQueueSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageTimeInQueueSeconds;
    }

    /**
     * Setter for averageTimeInQueueSeconds
     *
     * @param int $averageTimeInQueueSeconds
     * @return $this
     */
    public function setAverageTimeInQueueSeconds($averageTimeInQueueSeconds)
    {
        $this->averageTimeInQueueSeconds = $averageTimeInQueueSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageTimeInQueueSeconds()
    {
        $this->averageTimeInQueueSeconds = null;
        return $this;
    }

    /**
     * Getter for averageNumberOfAgentsBusy
     *
     * @return string
     */
    public function getAverageNumberOfAgentsBusy()
    {
        return $this->averageNumberOfAgentsBusy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageNumberOfAgentsBusy;
    }

    /**
     * Setter for averageNumberOfAgentsBusy
     *
     * @param string $averageNumberOfAgentsBusy
     * @return $this
     */
    public function setAverageNumberOfAgentsBusy($averageNumberOfAgentsBusy)
    {
        $this->averageNumberOfAgentsBusy = $averageNumberOfAgentsBusy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageNumberOfAgentsBusy()
    {
        $this->averageNumberOfAgentsBusy = null;
        return $this;
    }

    /**
     * Getter for averageNumberOfAgentsLoggedOff
     *
     * @return string
     */
    public function getAverageNumberOfAgentsLoggedOff()
    {
        return $this->averageNumberOfAgentsLoggedOff instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageNumberOfAgentsLoggedOff;
    }

    /**
     * Setter for averageNumberOfAgentsLoggedOff
     *
     * @param string $averageNumberOfAgentsLoggedOff
     * @return $this
     */
    public function setAverageNumberOfAgentsLoggedOff($averageNumberOfAgentsLoggedOff)
    {
        $this->averageNumberOfAgentsLoggedOff = $averageNumberOfAgentsLoggedOff;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageNumberOfAgentsLoggedOff()
    {
        $this->averageNumberOfAgentsLoggedOff = null;
        return $this;
    }

    /**
     * Getter for averageHoldTimeBeforeCallLossSeconds
     *
     * @return int
     */
    public function getAverageHoldTimeBeforeCallLossSeconds()
    {
        return $this->averageHoldTimeBeforeCallLossSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageHoldTimeBeforeCallLossSeconds;
    }

    /**
     * Setter for averageHoldTimeBeforeCallLossSeconds
     *
     * @param int $averageHoldTimeBeforeCallLossSeconds
     * @return $this
     */
    public function setAverageHoldTimeBeforeCallLossSeconds($averageHoldTimeBeforeCallLossSeconds)
    {
        $this->averageHoldTimeBeforeCallLossSeconds = $averageHoldTimeBeforeCallLossSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageHoldTimeBeforeCallLossSeconds()
    {
        $this->averageHoldTimeBeforeCallLossSeconds = null;
        return $this;
    }


}

