<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackGetResponse15sp2
 *
 * Response to SystemAutomaticCallbackGetRequest15sp2.
 *
 * @see SystemAutomaticCallbackGetRequest15sp2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:19960","type":"sequence"}]
 */
class SystemAutomaticCallbackGetResponse15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName monitorMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19960
     * @MinInclusive 5
     * @MaxInclusive 180
     * @var int|null
     */
    protected $monitorMinutes = null;

    /**
     * @ElementName maxMonitorsPerOriginator
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19960
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $maxMonitorsPerOriginator = null;

    /**
     * @ElementName maxCallbackRings
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19960
     * @MinInclusive 3
     * @MaxInclusive 8
     * @var int|null
     */
    protected $maxCallbackRings = null;

    /**
     * @ElementName maxMonitorsPerTerminator
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19960
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $maxMonitorsPerTerminator = null;

    /**
     * @ElementName terminatorIdleGuardSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19960
     * @MinInclusive 5
     * @MaxInclusive 300
     * @var int|null
     */
    protected $terminatorIdleGuardSeconds = null;

    /**
     * @ElementName callbackMethod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackMethod
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19960
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackMethod|null
     */
    protected $callbackMethod = null;

    /**
     * @ElementName pollingIntervalSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19960
     * @MinInclusive 60
     * @MaxInclusive 900
     * @var int|null
     */
    protected $pollingIntervalSeconds = null;

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

    /**
     * Getter for callbackMethod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackMethod
     */
    public function getCallbackMethod()
    {
        return $this->callbackMethod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callbackMethod;
    }

    /**
     * Setter for callbackMethod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackMethod $callbackMethod
     * @return $this
     */
    public function setCallbackMethod(\CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackMethod $callbackMethod)
    {
        $this->callbackMethod = $callbackMethod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallbackMethod()
    {
        $this->callbackMethod = null;
        return $this;
    }

    /**
     * Getter for pollingIntervalSeconds
     *
     * @return int
     */
    public function getPollingIntervalSeconds()
    {
        return $this->pollingIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pollingIntervalSeconds;
    }

    /**
     * Setter for pollingIntervalSeconds
     *
     * @param int $pollingIntervalSeconds
     * @return $this
     */
    public function setPollingIntervalSeconds($pollingIntervalSeconds)
    {
        $this->pollingIntervalSeconds = $pollingIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPollingIntervalSeconds()
    {
        $this->pollingIntervalSeconds = null;
        return $this;
    }


}

