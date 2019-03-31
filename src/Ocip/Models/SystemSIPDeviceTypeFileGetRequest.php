<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetRequest
 *
 * Request to get a sip device type file.
 *                 The response is either SystemSIPDeviceTypeFileGetResponse or ErrorResponse.
 *                 Replaced By: SystemSIPDeviceTypeFileGetRequest14sp8
 *
 * @see SystemSIPDeviceTypeFileGetResponse
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeFileGetRequest14sp8
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6021","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6021
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileType
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6021
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $fileType = null;

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
     * Getter for fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileType;
    }

    /**
     * Setter for fileType
     *
     * @param string $fileType
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileType()
    {
        $this->fileType = null;
        return $this;
    }


}

