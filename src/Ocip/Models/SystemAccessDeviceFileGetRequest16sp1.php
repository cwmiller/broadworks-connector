<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetRequest16sp1
 *
 * Request to get a device profile file.
 *         The response is either SystemAccessDeviceFileGetResponse16sp1 or ErrorResponse.
 *         
 *         Replaced by: SystemAccessDeviceFileGetRequest20
 *
 * @see SystemAccessDeviceFileGetResponse16sp1
 * @see ErrorResponse
 * @see SystemAccessDeviceFileGetRequest20
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:20100","type":"sequence"}]
 */
class SystemAccessDeviceFileGetRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:20100
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:20100
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $fileFormat = null;

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
}

