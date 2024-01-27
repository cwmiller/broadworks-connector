<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingModifyRequest
 *
 * Modify the system level data associated with Call Recording.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: SystemCallRecordingModifyRequest22
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCallRecordingModifyRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9351","type":"sequence"}]
 */
class SystemCallRecordingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName continueCallAfterRecordingFailure
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9351
     * @var bool|null
     */
    protected $continueCallAfterRecordingFailure = null;

    /**
     * @ElementName refreshPeriodSeconds
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9351
     * @MinInclusive 10
     * @MaxInclusive 300
     * @var int|null
     */
    protected $refreshPeriodSeconds = null;

    /**
     * @ElementName maxConsecutiveFailures
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9351
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxConsecutiveFailures = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9351
     * @MinInclusive 50
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName continueCallAfterVideoRecordingFailure
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9351
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

