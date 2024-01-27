<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetRequest22V2
 *
 * Request to get a sip device type file.
 *           The response is either SystemSIPDeviceTypeFileGetResponse22V2 or ErrorResponse.
 *
 * @see SystemSIPDeviceTypeFileGetResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17233","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17233
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17233
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $fileFormat = null;

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

