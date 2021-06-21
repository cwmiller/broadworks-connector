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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18499","type":"sequence"}]
 */
class SystemTemplateOnlyDeviceFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18499
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceName = null;

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

