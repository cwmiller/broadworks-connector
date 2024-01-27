<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetResponse
 *
 * Response to SystemCallRecordingGetRequest.
 *         
 *         Replaced By: SystemCallRecordingGetResponse22
 *
 * @see SystemCallRecordingGetRequest
 * @see SystemCallRecordingGetResponse22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9278","type":"sequence"}]
 */
class SystemCallRecordingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName continueCallAfterRecordingFailure
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:9278
     * @var bool|null
     */
    protected $continueCallAfterRecordingFailure = null;

    /**
     * @ElementName refreshPeriodSeconds
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:9278
     * @MinInclusive 10
     * @MaxInclusive 300
     * @var int|null
     */
    protected $refreshPeriodSeconds = null;

    /**
     * @ElementName maxConsecutiveFailures
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:9278
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxConsecutiveFailures = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:9278
     * @MinInclusive 50
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName continueCallAfterVideoRecordingFailure
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:9278
     * @var bool|null
     */
    protected $continueCallAfterVideoRecordingFailure = null;

    /**
     * Getter for continueCallAfterRecordingFailure
     *
     * @return bool
     */
    public function getContinueCallAfterRecordingFailure()
    {
        return $this->continueCallAfterRecordingFailure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->continueCallAfterRecordingFailure;
    }

    /**
     * Setter for continueCallAfterRecordingFailure
     *
     * @param bool $continueCallAfterRecordingFailure
     * @return $this
     */
    public function setContinueCallAfterRecordingFailure($continueCallAfterRecordingFailure)
    {
        $this->continueCallAfterRecordingFailure = $continueCallAfterRecordingFailure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContinueCallAfterRecordingFailure()
    {
        $this->continueCallAfterRecordingFailure = null;
        return $this;
    }

    /**
     * Getter for refreshPeriodSeconds
     *
     * @return int
     */
    public function getRefreshPeriodSeconds()
    {
        return $this->refreshPeriodSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->refreshPeriodSeconds;
    }

    /**
     * Setter for refreshPeriodSeconds
     *
     * @param int $refreshPeriodSeconds
     * @return $this
     */
    public function setRefreshPeriodSeconds($refreshPeriodSeconds)
    {
        $this->refreshPeriodSeconds = $refreshPeriodSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRefreshPeriodSeconds()
    {
        $this->refreshPeriodSeconds = null;
        return $this;
    }

    /**
     * Getter for maxConsecutiveFailures
     *
     * @return int
     */
    public function getMaxConsecutiveFailures()
    {
        return $this->maxConsecutiveFailures instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConsecutiveFailures;
    }

    /**
     * Setter for maxConsecutiveFailures
     *
     * @param int $maxConsecutiveFailures
     * @return $this
     */
    public function setMaxConsecutiveFailures($maxConsecutiveFailures)
    {
        $this->maxConsecutiveFailures = $maxConsecutiveFailures;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConsecutiveFailures()
    {
        $this->maxConsecutiveFailures = null;
        return $this;
    }

    /**
     * Getter for maxResponseWaitTimeMilliseconds
     *
     * @return int
     */
    public function getMaxResponseWaitTimeMilliseconds()
    {
        return $this->maxResponseWaitTimeMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxResponseWaitTimeMilliseconds;
    }

    /**
     * Setter for maxResponseWaitTimeMilliseconds
     *
     * @param int $maxResponseWaitTimeMilliseconds
     * @return $this
     */
    public function setMaxResponseWaitTimeMilliseconds($maxResponseWaitTimeMilliseconds)
    {
        $this->maxResponseWaitTimeMilliseconds = $maxResponseWaitTimeMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxResponseWaitTimeMilliseconds()
    {
        $this->maxResponseWaitTimeMilliseconds = null;
        return $this;
    }

    /**
     * Getter for continueCallAfterVideoRecordingFailure
     *
     * @return bool
     */
    public function getContinueCallAfterVideoRecordingFailure()
    {
        return $this->continueCallAfterVideoRecordingFailure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->continueCallAfterVideoRecordingFailure;
    }

    /**
     * Setter for continueCallAfterVideoRecordingFailure
     *
     * @param bool $continueCallAfterVideoRecordingFailure
     * @return $this
     */
    public function setContinueCallAfterVideoRecordingFailure($continueCallAfterVideoRecordingFailure)
    {
        $this->continueCallAfterVideoRecordingFailure = $continueCallAfterVideoRecordingFailure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContinueCallAfterVideoRecordingFailure()
    {
        $this->continueCallAfterVideoRecordingFailure = null;
        return $this;
    }
}

