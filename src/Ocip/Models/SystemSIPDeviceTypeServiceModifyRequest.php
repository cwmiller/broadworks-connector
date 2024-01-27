<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeServiceModifyRequest
 *
 * Request to set the level of integration that a device type has in relation to BroadWorks services.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17688","type":"sequence"}]
 */
class SystemSIPDeviceTypeServiceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17688
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName supportsPolycomPhoneServices
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17688
     * @var bool|null
     */
    protected $supportsPolycomPhoneServices = null;

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
     * Getter for supportsPolycomPhoneServices
     *
     * @return bool
     */
    public function getSupportsPolycomPhoneServices()
    {
        return $this->supportsPolycomPhoneServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportsPolycomPhoneServices;
    }

    /**
     * Setter for supportsPolycomPhoneServices
     *
     * @param bool $supportsPolycomPhoneServices
     * @return $this
     */
    public function setSupportsPolycomPhoneServices($supportsPolycomPhoneServices)
    {
        $this->supportsPolycomPhoneServices = $supportsPolycomPhoneServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportsPolycomPhoneServices()
    {
        $this->supportsPolycomPhoneServices = null;
        return $this;
    }
}

