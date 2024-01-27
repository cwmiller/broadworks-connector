<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceFileApplyExtendedCaptureToAllDeviceProfilesRequest
 *
 * Request to apply an extended file capture value to all the profile instances associated to a sip device type file.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17001","type":"sequence"}]
 */
class SystemSIPDeviceFileApplyExtendedCaptureToAllDeviceProfilesRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17001
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17001
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $fileFormat = null;

    /**
     * @ElementName extendedCaptureOnUploadFromDevice
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:17001
     * @var bool|null
     */
    protected $extendedCaptureOnUploadFromDevice = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }

    /**
     * Getter for fileFormat
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileFormat;
    }

    /**
     * Setter for fileFormat
     *
     * @param string $fileFormat
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileFormat()
    {
        $this->fileFormat = null;
        return $this;
    }

    /**
     * Getter for extendedCaptureOnUploadFromDevice
     *
     * @return bool
     */
    public function getExtendedCaptureOnUploadFromDevice()
    {
        return $this->extendedCaptureOnUploadFromDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCaptureOnUploadFromDevice;
    }

    /**
     * Setter for extendedCaptureOnUploadFromDevice
     *
     * @param bool $extendedCaptureOnUploadFromDevice
     * @return $this
     */
    public function setExtendedCaptureOnUploadFromDevice($extendedCaptureOnUploadFromDevice)
    {
        $this->extendedCaptureOnUploadFromDevice = $extendedCaptureOnUploadFromDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedCaptureOnUploadFromDevice()
    {
        $this->extendedCaptureOnUploadFromDevice = null;
        return $this;
    }
}

