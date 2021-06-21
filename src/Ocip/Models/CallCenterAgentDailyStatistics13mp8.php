<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentDailyStatistics13mp8
 *
 * Contains Call Center Agent statistics for one day.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:47630","type":"sequence"}]
 */
class CallCenterAgentDailyStatistics13mp8
{

    /**
     * @ElementName numberOfCallsReceived
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47630
     * @var int|null
     */
    private $numberOfCallsReceived = null;

    /**
     * @ElementName numberOfCallsNotAnswered
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47630
     * @var int|null
     */
    private $numberOfCallsNotAnswered = null;

    /**
     * @ElementName averageTimePerCallSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47630
     * @var int|null
     */
    private $averageTimePerCallSeconds = null;

    /**
     * @ElementName timeInCallsSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47630
     * @var int|null
     */
    private $timeInCallsSeconds = null;

    /**
     * @ElementName timeLoggedOffSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47630
     * @var int|null
     */
    private $timeLoggedOffSeconds = null;

    /**
     * @ElementName timeLoggedOnAndIdleSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47630
     * @var int|null
     */
    private $timeLoggedOnAndIdleSeconds = null;

    /**
     * Getter for numberOfCallsReceived
     *
     * @return int
     */
    public function getNumberOfCallsReceived()
    {
        return $this->numberOfCallsReceived instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsReceived;
    }

    /**
     * Setter for numberOfCallsReceived
     *
     * @param int $numberOfCallsReceived
     * @return $this
     */
    public function setNumberOfCallsReceived($numberOfCallsReceived)
    {
        $this->numberOfCallsReceived = $numberOfCallsReceived;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsReceived()
    {
        $this->numberOfCallsReceived = null;
        return $this;
    }

    /**
     * Getter for numberOfCallsNotAnswered
     *
     * @return int
     */
    public function getNumberOfCallsNotAnswered()
    {
        return $this->numberOfCallsNotAnswered instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsNotAnswered;
    }

    /**
     * Setter for numberOfCallsNotAnswered
     *
     * @param int $numberOfCallsNotAnswered
     * @return $this
     */
    public function setNumberOfCallsNotAnswered($numberOfCallsNotAnswered)
    {
        $this->numberOfCallsNotAnswered = $numberOfCallsNotAnswered;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsNotAnswered()
    {
        $this->numberOfCallsNotAnswered = null;
        return $this;
    }

    /**
     * Getter for averageTimePerCallSeconds
     *
     * @return int
     */
    public function getAverageTimePerCallSeconds()
    {
        return $this->averageTimePerCallSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageTimePerCallSeconds;
    }

    /**
     * Setter for averageTimePerCallSeconds
     *
     * @param int $averageTimePerCallSeconds
     * @return $this
     */
    public function setAverageTimePerCallSeconds($averageTimePerCallSeconds)
    {
        $this->averageTimePerCallSeconds = $averageTimePerCallSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageTimePerCallSeconds()
    {
        $this->averageTimePerCallSeconds = null;
        return $this;
    }

    /**
     * Getter for timeInCallsSeconds
     *
     * @return int
     */
    public function getTimeInCallsSeconds()
    {
        return $this->timeInCallsSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInCallsSeconds;
    }

    /**
     * Setter for timeInCallsSeconds
     *
     * @param int $timeInCallsSeconds
     * @return $this
     */
    public function setTimeInCallsSeconds($timeInCallsSeconds)
    {
        $this->timeInCallsSeconds = $timeInCallsSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInCallsSeconds()
    {
        $this->timeInCallsSeconds = null;
        return $this;
    }

    /**
     * Getter for timeLoggedOffSeconds
     *
     * @return int
     */
    public function getTimeLoggedOffSeconds()
    {
        return $this->timeLoggedOffSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeLoggedOffSeconds;
    }

    /**
     * Setter for timeLoggedOffSeconds
     *
     * @param int $timeLoggedOffSeconds
     * @return $this
     */
    public function setTimeLoggedOffSeconds($timeLoggedOffSeconds)
    {
        $this->timeLoggedOffSeconds = $timeLoggedOffSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeLoggedOffSeconds()
    {
        $this->timeLoggedOffSeconds = null;
        return $this;
    }

    /**
     * Getter for timeLoggedOnAndIdleSeconds
     *
     * @return int
     */
    public function getTimeLoggedOnAndIdleSeconds()
    {
        return $this->timeLoggedOnAndIdleSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeLoggedOnAndIdleSeconds;
    }

    /**
     * Setter for timeLoggedOnAndIdleSeconds
     *
     * @param int $timeLoggedOnAndIdleSeconds
     * @return $this
     */
    public function setTimeLoggedOnAndIdleSeconds($timeLoggedOnAndIdleSeconds)
    {
        $this->timeLoggedOnAndIdleSeconds = $timeLoggedOnAndIdleSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeLoggedOnAndIdleSeconds()
    {
        $this->timeLoggedOnAndIdleSeconds = null;
        return $this;
    }


}

