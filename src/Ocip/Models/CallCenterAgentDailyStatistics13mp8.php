<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentDailyStatistics13mp8
 *
 * Contains Call Center Agent statistics for one day.
 */
class CallCenterAgentDailyStatistics13mp8
{

    /**
     * @ElementName numberOfCallsReceived
     * @var int|null
     */
    private $numberOfCallsReceived = null;

    /**
     * @ElementName numberOfCallsNotAnswered
     * @var int|null
     */
    private $numberOfCallsNotAnswered = null;

    /**
     * @ElementName averageTimePerCallSeconds
     * @var int|null
     */
    private $averageTimePerCallSeconds = null;

    /**
     * @ElementName timeInCallsSeconds
     * @var int|null
     */
    private $timeInCallsSeconds = null;

    /**
     * @ElementName timeLoggedOffSeconds
     * @var int|null
     */
    private $timeLoggedOffSeconds = null;

    /**
     * @ElementName timeLoggedOnAndIdleSeconds
     * @var int|null
     */
    private $timeLoggedOnAndIdleSeconds = null;

    /**
     * Getter for numberOfCallsReceived
     *
     * @ElementName numberOfCallsReceived
     * @return int|null
     */
    public function getNumberOfCallsReceived()
    {
        return $this->numberOfCallsReceived;
    }

    /**
     * Setter for numberOfCallsReceived
     *
     * @ElementName numberOfCallsReceived
     * @param int|null $numberOfCallsReceived
     * @return $this
     */
    public function setNumberOfCallsReceived($numberOfCallsReceived)
    {
        $this->numberOfCallsReceived = $numberOfCallsReceived;
        return $this;
    }

    /**
     * Getter for numberOfCallsNotAnswered
     *
     * @ElementName numberOfCallsNotAnswered
     * @return int|null
     */
    public function getNumberOfCallsNotAnswered()
    {
        return $this->numberOfCallsNotAnswered;
    }

    /**
     * Setter for numberOfCallsNotAnswered
     *
     * @ElementName numberOfCallsNotAnswered
     * @param int|null $numberOfCallsNotAnswered
     * @return $this
     */
    public function setNumberOfCallsNotAnswered($numberOfCallsNotAnswered)
    {
        $this->numberOfCallsNotAnswered = $numberOfCallsNotAnswered;
        return $this;
    }

    /**
     * Getter for averageTimePerCallSeconds
     *
     * @ElementName averageTimePerCallSeconds
     * @return int|null
     */
    public function getAverageTimePerCallSeconds()
    {
        return $this->averageTimePerCallSeconds;
    }

    /**
     * Setter for averageTimePerCallSeconds
     *
     * @ElementName averageTimePerCallSeconds
     * @param int|null $averageTimePerCallSeconds
     * @return $this
     */
    public function setAverageTimePerCallSeconds($averageTimePerCallSeconds)
    {
        $this->averageTimePerCallSeconds = $averageTimePerCallSeconds;
        return $this;
    }

    /**
     * Getter for timeInCallsSeconds
     *
     * @ElementName timeInCallsSeconds
     * @return int|null
     */
    public function getTimeInCallsSeconds()
    {
        return $this->timeInCallsSeconds;
    }

    /**
     * Setter for timeInCallsSeconds
     *
     * @ElementName timeInCallsSeconds
     * @param int|null $timeInCallsSeconds
     * @return $this
     */
    public function setTimeInCallsSeconds($timeInCallsSeconds)
    {
        $this->timeInCallsSeconds = $timeInCallsSeconds;
        return $this;
    }

    /**
     * Getter for timeLoggedOffSeconds
     *
     * @ElementName timeLoggedOffSeconds
     * @return int|null
     */
    public function getTimeLoggedOffSeconds()
    {
        return $this->timeLoggedOffSeconds;
    }

    /**
     * Setter for timeLoggedOffSeconds
     *
     * @ElementName timeLoggedOffSeconds
     * @param int|null $timeLoggedOffSeconds
     * @return $this
     */
    public function setTimeLoggedOffSeconds($timeLoggedOffSeconds)
    {
        $this->timeLoggedOffSeconds = $timeLoggedOffSeconds;
        return $this;
    }

    /**
     * Getter for timeLoggedOnAndIdleSeconds
     *
     * @ElementName timeLoggedOnAndIdleSeconds
     * @return int|null
     */
    public function getTimeLoggedOnAndIdleSeconds()
    {
        return $this->timeLoggedOnAndIdleSeconds;
    }

    /**
     * Setter for timeLoggedOnAndIdleSeconds
     *
     * @ElementName timeLoggedOnAndIdleSeconds
     * @param int|null $timeLoggedOnAndIdleSeconds
     * @return $this
     */
    public function setTimeLoggedOnAndIdleSeconds($timeLoggedOnAndIdleSeconds)
    {
        $this->timeLoggedOnAndIdleSeconds = $timeLoggedOnAndIdleSeconds;
        return $this;
    }


}

