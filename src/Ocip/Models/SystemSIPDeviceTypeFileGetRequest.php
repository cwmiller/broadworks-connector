<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetRequest
 *
 * Request to get a sip device type file.
 *             The response is either SystemSIPDeviceTypeFileGetResponse or ErrorResponse.
 *             Replaced By: SystemSIPDeviceTypeFileGetRequest14sp8
 *
 * @see SystemSIPDeviceTypeFileGetResponse
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeFileGetRequest14sp8
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:32071","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:32071
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName fileType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:32071
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $fileType = null;

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

