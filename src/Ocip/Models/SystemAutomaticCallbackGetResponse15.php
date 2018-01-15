<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackGetResponse15
 *
 * Response to SystemAutomaticCallbackGetRequest15.
 *
 *             Replaced By: SystemAutomaticCallbackGetResponse15sp2
 */
class SystemAutomaticCallbackGetResponse15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName monitorMinutes
     * @var int|null
     */
    private $monitorMinutes = null;

    /**
     * @ElementName maxMonitorsPerOriginator
     * @var int|null
     */
    private $maxMonitorsPerOriginator = null;

    /**
     * @ElementName maxCallbackRings
     * @var int|null
     */
    private $maxCallbackRings = null;

    /**
     * @ElementName maxMonitorsPerTerminator
     * @var int|null
     */
    private $maxMonitorsPerTerminator = null;

    /**
     * @ElementName terminatorIdleGuardSeconds
     * @var int|null
     */
    private $terminatorIdleGuardSeconds = null;

    /**
     * Getter for monitorMinutes
     *
     * @ElementName monitorMinutes
     * @return int|null
     */
    public function getMonitorMinutes()
    {
        return $this->monitorMinutes;
    }

    /**
     * Setter for monitorMinutes
     *
     * @ElementName monitorMinutes
     * @param int|null $monitorMinutes
     * @return $this
     */
    public function setMonitorMinutes($monitorMinutes)
    {
        $this->monitorMinutes = $monitorMinutes;
        return $this;
    }

    /**
     * Getter for maxMonitorsPerOriginator
     *
     * @ElementName maxMonitorsPerOriginator
     * @return int|null
     */
    public function getMaxMonitorsPerOriginator()
    {
        return $this->maxMonitorsPerOriginator;
    }

    /**
     * Setter for maxMonitorsPerOriginator
     *
     * @ElementName maxMonitorsPerOriginator
     * @param int|null $maxMonitorsPerOriginator
     * @return $this
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator)
    {
        $this->maxMonitorsPerOriginator = $maxMonitorsPerOriginator;
        return $this;
    }

    /**
     * Getter for maxCallbackRings
     *
     * @ElementName maxCallbackRings
     * @return int|null
     */
    public function getMaxCallbackRings()
    {
        return $this->maxCallbackRings;
    }

    /**
     * Setter for maxCallbackRings
     *
     * @ElementName maxCallbackRings
     * @param int|null $maxCallbackRings
     * @return $this
     */
    public function setMaxCallbackRings($maxCallbackRings)
    {
        $this->maxCallbackRings = $maxCallbackRings;
        return $this;
    }

    /**
     * Getter for maxMonitorsPerTerminator
     *
     * @ElementName maxMonitorsPerTerminator
     * @return int|null
     */
    public function getMaxMonitorsPerTerminator()
    {
        return $this->maxMonitorsPerTerminator;
    }

    /**
     * Setter for maxMonitorsPerTerminator
     *
     * @ElementName maxMonitorsPerTerminator
     * @param int|null $maxMonitorsPerTerminator
     * @return $this
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator)
    {
        $this->maxMonitorsPerTerminator = $maxMonitorsPerTerminator;
        return $this;
    }

    /**
     * Getter for terminatorIdleGuardSeconds
     *
     * @ElementName terminatorIdleGuardSeconds
     * @return int|null
     */
    public function getTerminatorIdleGuardSeconds()
    {
        return $this->terminatorIdleGuardSeconds;
    }

    /**
     * Setter for terminatorIdleGuardSeconds
     *
     * @ElementName terminatorIdleGuardSeconds
     * @param int|null $terminatorIdleGuardSeconds
     * @return $this
     */
    public function setTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds)
    {
        $this->terminatorIdleGuardSeconds = $terminatorIdleGuardSeconds;
        return $this;
    }


}

