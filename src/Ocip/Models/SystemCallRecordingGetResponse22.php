<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetResponse22
 *
 * Response to SystemCallRecordingGetRequest22.
 *
 * @see SystemCallRecordingGetRequest22
 */
class SystemCallRecordingGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName continueCallAfterRecordingFailure
     * @Type bool
     * @var bool|null
     */
    private $continueCallAfterRecordingFailure = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @Type int
     * @var int|null
     */
    private $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName continueCallAfterVideoRecordingFailure
     * @Type bool
     * @var bool|null
     */
    private $continueCallAfterVideoRecordingFailure = null;

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

