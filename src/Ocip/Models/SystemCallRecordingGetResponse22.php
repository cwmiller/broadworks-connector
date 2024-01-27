<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetResponse22
 *
 * Response to SystemCallRecordingGetRequest22.
 *         
 *         Replaced by: SystemCallRecordingGetResponse23
 *
 * @see SystemCallRecordingGetRequest22
 * @see SystemCallRecordingGetResponse23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9299","type":"sequence"}]
 */
class SystemCallRecordingGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName continueCallAfterRecordingFailure
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:9299
     * @var bool|null
     */
    protected $continueCallAfterRecordingFailure = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:9299
     * @MinInclusive 50
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName continueCallAfterVideoRecordingFailure
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:9299
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

