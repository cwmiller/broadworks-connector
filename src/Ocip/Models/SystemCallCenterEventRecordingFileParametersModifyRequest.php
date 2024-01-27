<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEventRecordingFileParametersModifyRequest
 *
 * Request to modify Call Center Event Recording File system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6502","type":"sequence"}]
 */
class SystemCallCenterEventRecordingFileParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName fileRetentionTimeDays
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6502
     * @MinInclusive 0
     * @MaxInclusive 120
     * @var int|null
     */
    protected $fileRetentionTimeDays = null;

    /**
     * @ElementName fileRotationPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingFileRotationPeriodMinutes
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6502
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingFileRotationPeriodMinutes|null
     */
    protected $fileRotationPeriodMinutes = null;

    /**
     * @ElementName fileRotationOffsetMinutes
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6502
     * @MinInclusive 0
     * @MaxInclusive 59
     * @var int|null
     */
    protected $fileRotationOffsetMinutes = null;

    /**
     * @ElementName remoteUrl
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6502
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $remoteUrl = null;

    /**
     * @ElementName remoteUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6502
     * @MinLength 1
     * @MaxLength 20
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $remoteUserId = null;

    /**
     * @ElementName remotePassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6502
     * @MinLength 1
     * @MaxLength 20
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $remotePassword = null;

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
     * @return string|null
     */
    public function getRemoteUrl()
    {
        return $this->remoteUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remoteUrl;
    }

    /**
     * Setter for remoteUrl
     *
     * @param string|null $remoteUrl
     * @return $this
     */
    public function setRemoteUrl($remoteUrl = null)
    {
        if ($remoteUrl === null) {
            $this->remoteUrl = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->remoteUrl = $remoteUrl;
        }
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
     * @return string|null
     */
    public function getRemoteUserId()
    {
        return $this->remoteUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remoteUserId;
    }

    /**
     * Setter for remoteUserId
     *
     * @param string|null $remoteUserId
     * @return $this
     */
    public function setRemoteUserId($remoteUserId = null)
    {
        if ($remoteUserId === null) {
            $this->remoteUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->remoteUserId = $remoteUserId;
        }
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

    /**
     * Getter for remotePassword
     *
     * @return string|null
     */
    public function getRemotePassword()
    {
        return $this->remotePassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remotePassword;
    }

    /**
     * Setter for remotePassword
     *
     * @param string|null $remotePassword
     * @return $this
     */
    public function setRemotePassword($remotePassword = null)
    {
        if ($remotePassword === null) {
            $this->remotePassword = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->remotePassword = $remotePassword;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemotePassword()
    {
        $this->remotePassword = null;
        return $this;
    }
}

