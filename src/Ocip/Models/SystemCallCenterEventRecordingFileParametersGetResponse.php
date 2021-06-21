<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEventRecordingFileParametersGetResponse
 *
 * Response to SystemCallCenterEventRecordingFileParametersGetRequest.
 *         Contains a list of system Call Center Event Recording File parameters.
 *
 * @see SystemCallCenterEventRecordingFileParametersGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6488","type":"sequence"}]
 */
class SystemCallCenterEventRecordingFileParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileRetentionTimeDays
     * @Type int
     * @Group e2c537e3e39483b96620673a7012ffdd:6488
     * @MinInclusive 0
     * @MaxInclusive 120
     * @var int|null
     */
    private $fileRetentionTimeDays = null;

    /**
     * @ElementName fileRotationPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingFileRotationPeriodMinutes
     * @Group e2c537e3e39483b96620673a7012ffdd:6488
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingFileRotationPeriodMinutes|null
     */
    private $fileRotationPeriodMinutes = null;

    /**
     * @ElementName fileRotationOffsetMinutes
     * @Type int
     * @Group e2c537e3e39483b96620673a7012ffdd:6488
     * @MinInclusive 0
     * @MaxInclusive 59
     * @var int|null
     */
    private $fileRotationOffsetMinutes = null;

    /**
     * @ElementName remoteUrl
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6488
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $remoteUrl = null;

    /**
     * @ElementName remoteUserId
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6488
     * @MinLength 1
     * @MaxLength 20
     * @var string|null
     */
    private $remoteUserId = null;

    /**
     * Getter for fileRetentionTimeDays
     *
     * @return int
     */
    public function getFileRetentionTimeDays()
    {
        return $this->fileRetentionTimeDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRetentionTimeDays;
    }

    /**
     * Setter for fileRetentionTimeDays
     *
     * @param int $fileRetentionTimeDays
     * @return $this
     */
    public function setFileRetentionTimeDays($fileRetentionTimeDays)
    {
        $this->fileRetentionTimeDays = $fileRetentionTimeDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRetentionTimeDays()
    {
        $this->fileRetentionTimeDays = null;
        return $this;
    }

    /**
     * Getter for fileRotationPeriodMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingFileRotationPeriodMinutes
     */
    public function getFileRotationPeriodMinutes()
    {
        return $this->fileRotationPeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRotationPeriodMinutes;
    }

    /**
     * Setter for fileRotationPeriodMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingFileRotationPeriodMinutes $fileRotationPeriodMinutes
     * @return $this
     */
    public function setFileRotationPeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingFileRotationPeriodMinutes $fileRotationPeriodMinutes)
    {
        $this->fileRotationPeriodMinutes = $fileRotationPeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRotationPeriodMinutes()
    {
        $this->fileRotationPeriodMinutes = null;
        return $this;
    }

    /**
     * Getter for fileRotationOffsetMinutes
     *
     * @return int
     */
    public function getFileRotationOffsetMinutes()
    {
        return $this->fileRotationOffsetMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRotationOffsetMinutes;
    }

    /**
     * Setter for fileRotationOffsetMinutes
     *
     * @param int $fileRotationOffsetMinutes
     * @return $this
     */
    public function setFileRotationOffsetMinutes($fileRotationOffsetMinutes)
    {
        $this->fileRotationOffsetMinutes = $fileRotationOffsetMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRotationOffsetMinutes()
    {
        $this->fileRotationOffsetMinutes = null;
        return $this;
    }

    /**
     * Getter for remoteUrl
     *
     * @return string
     */
    public function getRemoteUrl()
    {
        return $this->remoteUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remoteUrl;
    }

    /**
     * Setter for remoteUrl
     *
     * @param string $remoteUrl
     * @return $this
     */
    public function setRemoteUrl($remoteUrl)
    {
        $this->remoteUrl = $remoteUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoteUrl()
    {
        $this->remoteUrl = null;
        return $this;
    }

    /**
     * Getter for remoteUserId
     *
     * @return string
     */
    public function getRemoteUserId()
    {
        return $this->remoteUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remoteUserId;
    }

    /**
     * Setter for remoteUserId
     *
     * @param string $remoteUserId
     * @return $this
     */
    public function setRemoteUserId($remoteUserId)
    {
        $this->remoteUserId = $remoteUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoteUserId()
    {
        $this->remoteUserId = null;
        return $this;
    }


}

