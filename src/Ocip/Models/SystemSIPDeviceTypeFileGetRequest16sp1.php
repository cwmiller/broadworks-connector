<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetRequest16sp1
 *
 * Replaced by: SystemSIPDeviceTypeFileGetRequest18.
 *           Request to get a sip device type file.
 *           The response is either SystemSIPDeviceTypeFileGetResponse16sp1 or ErrorResponse.
 *
 * @see SystemSIPDeviceTypeFileGetRequest18
 * @see SystemSIPDeviceTypeFileGetResponse16sp1
 * @see ErrorResponse
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:25854","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileGetRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:25854
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:25854
     * @var string|null
     */
    private $fileFormat = null;

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


}

