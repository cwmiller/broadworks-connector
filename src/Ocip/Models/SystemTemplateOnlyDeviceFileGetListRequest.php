<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTemplateOnlyDeviceFileGetListRequest
 *
 * Request to get the list of template files used to support a VDM device defined at system level.
 *         The response is either SystemTemplateOnlyDeviceFileGetListResponse or ErrorResponse.
 *
 * @see SystemTemplateOnlyDeviceFileGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18730","type":"sequence"}]
 */
class SystemTemplateOnlyDeviceFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:18730
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

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
}

