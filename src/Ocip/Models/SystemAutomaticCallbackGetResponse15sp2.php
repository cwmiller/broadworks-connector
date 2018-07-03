<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackGetResponse15sp2
 *
 * Response to SystemAutomaticCallbackGetRequest15sp2.
 *
 * @see SystemAutomaticCallbackGetRequest15sp2
 */
class SystemAutomaticCallbackGetResponse15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName callbackMethod
     * @var string|null
     */
    private $callbackMethod = null;

    /**
     * @ElementName pollingIntervalSeconds
     * @var int|null
     */
    private $pollingIntervalSeconds = null;

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

    /**
     * Getter for callbackMethod
     *
     * @ElementName callbackMethod
     * @return string|null
     */
    public function getCallbackMethod()
    {
        return $this->callbackMethod;
    }

    /**
     * Setter for callbackMethod
     *
     * @ElementName callbackMethod
     * @param string|null $callbackMethod
     * @return $this
     */
    public function setCallbackMethod($callbackMethod)
    {
        $this->callbackMethod = $callbackMethod;
        return $this;
    }

    /**
     * Getter for pollingIntervalSeconds
     *
     * @ElementName pollingIntervalSeconds
     * @return int|null
     */
    public function getPollingIntervalSeconds()
    {
        return $this->pollingIntervalSeconds;
    }

    /**
     * Setter for pollingIntervalSeconds
     *
     * @ElementName pollingIntervalSeconds
     * @param int|null $pollingIntervalSeconds
     * @return $this
     */
    public function setPollingIntervalSeconds($pollingIntervalSeconds)
    {
        $this->pollingIntervalSeconds = $pollingIntervalSeconds;
        return $this;
    }


}

