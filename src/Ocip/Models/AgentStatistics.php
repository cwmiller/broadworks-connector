<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AgentStatistics
 *
 * Contains Call Center Agent statistics for a given time frame.
 */
class AgentStatistics
{

    /**
     * @ElementName numberOfCallsHandled
     * @var int|null
     */
    private $numberOfCallsHandled = null;

    /**
     * @ElementName numberOfCallsUnanswered
     * @var int|null
     */
    private $numberOfCallsUnanswered = null;

    /**
     * @ElementName averageCallSeconds
     * @var int|null
     */
    private $averageCallSeconds = null;

    /**
     * @ElementName totalTalkSeconds
     * @var int|null
     */
    private $totalTalkSeconds = null;

    /**
     * @ElementName totalStaffedSeconds
     * @var int|null
     */
    private $totalStaffedSeconds = null;

    /**
     * Getter for numberOfCallsHandled
     *
     * @ElementName numberOfCallsHandled
     * @return int|null
     */
    public function getNumberOfCallsHandled()
    {
        return $this->numberOfCallsHandled;
    }

    /**
     * Setter for numberOfCallsHandled
     *
     * @ElementName numberOfCallsHandled
     * @param int|null $numberOfCallsHandled
     * @return $this
     */
    public function setNumberOfCallsHandled($numberOfCallsHandled)
    {
        $this->numberOfCallsHandled = $numberOfCallsHandled;
        return $this;
    }

    /**
     * Getter for numberOfCallsUnanswered
     *
     * @ElementName numberOfCallsUnanswered
     * @return int|null
     */
    public function getNumberOfCallsUnanswered()
    {
        return $this->numberOfCallsUnanswered;
    }

    /**
     * Setter for numberOfCallsUnanswered
     *
     * @ElementName numberOfCallsUnanswered
     * @param int|null $numberOfCallsUnanswered
     * @return $this
     */
    public function setNumberOfCallsUnanswered($numberOfCallsUnanswered)
    {
        $this->numberOfCallsUnanswered = $numberOfCallsUnanswered;
        return $this;
    }

    /**
     * Getter for averageCallSeconds
     *
     * @ElementName averageCallSeconds
     * @return int|null
     */
    public function getAverageCallSeconds()
    {
        return $this->averageCallSeconds;
    }

    /**
     * Setter for averageCallSeconds
     *
     * @ElementName averageCallSeconds
     * @param int|null $averageCallSeconds
     * @return $this
     */
    public function setAverageCallSeconds($averageCallSeconds)
    {
        $this->averageCallSeconds = $averageCallSeconds;
        return $this;
    }

    /**
     * Getter for totalTalkSeconds
     *
     * @ElementName totalTalkSeconds
     * @return int|null
     */
    public function getTotalTalkSeconds()
    {
        return $this->totalTalkSeconds;
    }

    /**
     * Setter for totalTalkSeconds
     *
     * @ElementName totalTalkSeconds
     * @param int|null $totalTalkSeconds
     * @return $this
     */
    public function setTotalTalkSeconds($totalTalkSeconds)
    {
        $this->totalTalkSeconds = $totalTalkSeconds;
        return $this;
    }

    /**
     * Getter for totalStaffedSeconds
     *
     * @ElementName totalStaffedSeconds
     * @return int|null
     */
    public function getTotalStaffedSeconds()
    {
        return $this->totalStaffedSeconds;
    }

    /**
     * Setter for totalStaffedSeconds
     *
     * @ElementName totalStaffedSeconds
     * @param int|null $totalStaffedSeconds
     * @return $this
     */
    public function setTotalStaffedSeconds($totalStaffedSeconds)
    {
        $this->totalStaffedSeconds = $totalStaffedSeconds;
        return $this;
    }


}

