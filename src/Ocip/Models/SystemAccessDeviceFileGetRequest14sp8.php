<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetRequest14sp8
 *
 * Request to get a device profile file.
 *                 The response is either SystemAccessDeviceFileGetResponse14sp8 or ErrorResponse.
 *                 Replaced by: SystemAccessDeviceFileGetRequest16sp1
 *
 * @see SystemAccessDeviceFileGetResponse14sp8
 * @see ErrorResponse
 * @see SystemAccessDeviceFileGetRequest16sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:14767","type":"sequence"}]
 */
class SystemAccessDeviceFileGetRequest14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14767
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14767
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    private $fileFormat = null;

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

