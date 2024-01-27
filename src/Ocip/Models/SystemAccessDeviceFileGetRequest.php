<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetRequest
 *
 * Request to get a device profile file.
 *           The response is either SystemAccessDeviceFileGetResponse or ErrorResponse.
 *           Replaced By: SystemAccessDeviceFileGetRequest14sp8
 *
 * @see SystemAccessDeviceFileGetResponse
 * @see ErrorResponse
 * @see SystemAccessDeviceFileGetRequest14sp8
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:20063","type":"sequence"}]
 */
class SystemAccessDeviceFileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:20063
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName fileType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:20063
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $fileType = null;

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
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

