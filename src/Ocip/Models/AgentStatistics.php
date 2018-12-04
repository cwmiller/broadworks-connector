<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AgentStatistics
 *
 * Contains Call Center Agent statistics for a given time frame.
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6540","type":"sequence"}]
 */
class AgentStatistics
{

    /**
     * @ElementName numberOfCallsHandled
     * @Type int
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6540
     * @var int|null
     */
    private $numberOfCallsHandled = null;

    /**
     * @ElementName numberOfCallsUnanswered
     * @Type int
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6540
     * @var int|null
     */
    private $numberOfCallsUnanswered = null;

    /**
     * @ElementName averageCallSeconds
     * @Type int
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6540
     * @var int|null
     */
    private $averageCallSeconds = null;

    /**
     * @ElementName totalTalkSeconds
     * @Type int
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6540
     * @var int|null
     */
    private $totalTalkSeconds = null;

    /**
     * @ElementName totalStaffedSeconds
     * @Type int
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6540
     * @var int|null
     */
    private $totalStaffedSeconds = null;

    /**
     * Getter for numberOfCallsHandled
     *
     * @return int
     */
    public function getNumberOfCallsHandled()
    {
        return $this->numberOfCallsHandled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsHandled;
    }

    /**
     * Setter for numberOfCallsHandled
     *
     * @param int $numberOfCallsHandled
     * @return $this
     */
    public function setNumberOfCallsHandled($numberOfCallsHandled)
    {
        $this->numberOfCallsHandled = $numberOfCallsHandled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsHandled()
    {
        $this->numberOfCallsHandled = null;
        return $this;
    }

    /**
     * Getter for numberOfCallsUnanswered
     *
     * @return int
     */
    public function getNumberOfCallsUnanswered()
    {
        return $this->numberOfCallsUnanswered instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsUnanswered;
    }

    /**
     * Setter for numberOfCallsUnanswered
     *
     * @param int $numberOfCallsUnanswered
     * @return $this
     */
    public function setNumberOfCallsUnanswered($numberOfCallsUnanswered)
    {
        $this->numberOfCallsUnanswered = $numberOfCallsUnanswered;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsUnanswered()
    {
        $this->numberOfCallsUnanswered = null;
        return $this;
    }

    /**
     * Getter for averageCallSeconds
     *
     * @return int
     */
    public function getAverageCallSeconds()
    {
        return $this->averageCallSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->averageCallSeconds;
    }

    /**
     * Setter for averageCallSeconds
     *
     * @param int $averageCallSeconds
     * @return $this
     */
    public function setAverageCallSeconds($averageCallSeconds)
    {
        $this->averageCallSeconds = $averageCallSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAverageCallSeconds()
    {
        $this->averageCallSeconds = null;
        return $this;
    }

    /**
     * Getter for totalTalkSeconds
     *
     * @return int
     */
    public function getTotalTalkSeconds()
    {
        return $this->totalTalkSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalTalkSeconds;
    }

    /**
     * Setter for totalTalkSeconds
     *
     * @param int $totalTalkSeconds
     * @return $this
     */
    public function setTotalTalkSeconds($totalTalkSeconds)
    {
        $this->totalTalkSeconds = $totalTalkSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalTalkSeconds()
    {
        $this->totalTalkSeconds = null;
        return $this;
    }

    /**
     * Getter for totalStaffedSeconds
     *
     * @return int
     */
    public function getTotalStaffedSeconds()
    {
        return $this->totalStaffedSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalStaffedSeconds;
    }

    /**
     * Setter for totalStaffedSeconds
     *
     * @param int $totalStaffedSeconds
     * @return $this
     */
    public function setTotalStaffedSeconds($totalStaffedSeconds)
    {
        $this->totalStaffedSeconds = $totalStaffedSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalStaffedSeconds()
    {
        $this->totalStaffedSeconds = null;
        return $this;
    }


}

