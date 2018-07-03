<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceFileApplyExtendedCaptureToAllDeviceProfilesRequest
 *
 * Request to apply an extended file capture value to all the profile instances
 * associated to a sip device type file.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSIPDeviceFileApplyExtendedCaptureToAllDeviceProfilesRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileFormat
     * @var string|null
     */
    private $fileFormat = null;

    /**
     * @ElementName extendedCaptureOnUploadFromDevice
     * @var bool|null
     */
    private $extendedCaptureOnUploadFromDevice = null;

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for fileFormat
     *
     * @ElementName fileFormat
     * @return string|null
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * Setter for fileFormat
     *
     * @ElementName fileFormat
     * @param string|null $fileFormat
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * Getter for extendedCaptureOnUploadFromDevice
     *
     * @ElementName extendedCaptureOnUploadFromDevice
     * @return bool|null
     */
    public function getExtendedCaptureOnUploadFromDevice()
    {
        return $this->extendedCaptureOnUploadFromDevice;
    }

    /**
     * Setter for extendedCaptureOnUploadFromDevice
     *
     * @ElementName extendedCaptureOnUploadFromDevice
     * @param bool|null $extendedCaptureOnUploadFromDevice
     * @return $this
     */
    public function setExtendedCaptureOnUploadFromDevice($extendedCaptureOnUploadFromDevice)
    {
        $this->extendedCaptureOnUploadFromDevice = $extendedCaptureOnUploadFromDevice;
        return $this;
    }


}

