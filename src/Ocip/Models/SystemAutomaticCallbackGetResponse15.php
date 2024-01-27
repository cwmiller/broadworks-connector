<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackGetResponse15
 *
 * Response to SystemAutomaticCallbackGetRequest15.
 *             Replaced By: SystemAutomaticCallbackGetResponse15sp2
 *
 * @see SystemAutomaticCallbackGetRequest15
 * @see SystemAutomaticCallbackGetResponse15sp2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:20675","type":"sequence"}]
 */
class SystemAutomaticCallbackGetResponse15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName monitorMinutes
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:20675
     * @MinInclusive 5
     * @MaxInclusive 180
     * @var int|null
     */
    protected $monitorMinutes = null;

    /**
     * @ElementName maxMonitorsPerOriginator
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:20675
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $maxMonitorsPerOriginator = null;

    /**
     * @ElementName maxCallbackRings
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:20675
     * @MinInclusive 3
     * @MaxInclusive 8
     * @var int|null
     */
    protected $maxCallbackRings = null;

    /**
     * @ElementName maxMonitorsPerTerminator
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:20675
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $maxMonitorsPerTerminator = null;

    /**
     * @ElementName terminatorIdleGuardSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:20675
     * @MinInclusive 5
     * @MaxInclusive 300
     * @var int|null
     */
    protected $terminatorIdleGuardSeconds = null;

    /**
     * Getter for monitorMinutes
     *
     * @return int
     */
    public function getMonitorMinutes()
    {
        return $this->monitorMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monitorMinutes;
    }

    /**
     * Setter for monitorMinutes
     *
     * @param int $monitorMinutes
     * @return $this
     */
    public function setMonitorMinutes($monitorMinutes)
    {
        $this->monitorMinutes = $monitorMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonitorMinutes()
    {
        $this->monitorMinutes = null;
        return $this;
    }

    /**
     * Getter for maxMonitorsPerOriginator
     *
     * @return int
     */
    public function getMaxMonitorsPerOriginator()
    {
        return $this->maxMonitorsPerOriginator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMonitorsPerOriginator;
    }

    /**
     * Setter for maxMonitorsPerOriginator
     *
     * @param int $maxMonitorsPerOriginator
     * @return $this
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator)
    {
        $this->maxMonitorsPerOriginator = $maxMonitorsPerOriginator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMonitorsPerOriginator()
    {
        $this->maxMonitorsPerOriginator = null;
        return $this;
    }

    /**
     * Getter for maxCallbackRings
     *
     * @return int
     */
    public function getMaxCallbackRings()
    {
        return $this->maxCallbackRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCallbackRings;
    }

    /**
     * Setter for maxCallbackRings
     *
     * @param int $maxCallbackRings
     * @return $this
     */
    public function setMaxCallbackRings($maxCallbackRings)
    {
        $this->maxCallbackRings = $maxCallbackRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCallbackRings()
    {
        $this->maxCallbackRings = null;
        return $this;
    }

    /**
     * Getter for maxMonitorsPerTerminator
     *
     * @return int
     */
    public function getMaxMonitorsPerTerminator()
    {
        return $this->maxMonitorsPerTerminator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMonitorsPerTerminator;
    }

    /**
     * Setter for maxMonitorsPerTerminator
     *
     * @param int $maxMonitorsPerTerminator
     * @return $this
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator)
    {
        $this->maxMonitorsPerTerminator = $maxMonitorsPerTerminator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMonitorsPerTerminator()
    {
        $this->maxMonitorsPerTerminator = null;
        return $this;
    }

    /**
     * Getter for terminatorIdleGuardSeconds
     *
     * @return int
     */
    public function getTerminatorIdleGuardSeconds()
    {
        return $this->terminatorIdleGuardSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminatorIdleGuardSeconds;
    }

    /**
     * Setter for terminatorIdleGuardSeconds
     *
     * @param int $terminatorIdleGuardSeconds
     * @return $this
     */
    public function setTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds)
    {
        $this->terminatorIdleGuardSeconds = $terminatorIdleGuardSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminatorIdleGuardSeconds()
    {
        $this->terminatorIdleGuardSeconds = null;
        return $this;
    }
}

