<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeServiceModifyRequest
 *
 * Request to set the level of integration that a device type has in relation to
 * BroadWorks services.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeServiceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName supportsPolycomPhoneServices
     * @var bool|null
     */
    private $supportsPolycomPhoneServices = null;

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for supportsPolycomPhoneServices
     *
     * @ElementName supportsPolycomPhoneServices
     * @return bool|null
     */
    public function getSupportsPolycomPhoneServices()
    {
        return $this->supportsPolycomPhoneServices;
    }

    /**
     * Setter for supportsPolycomPhoneServices
     *
     * @ElementName supportsPolycomPhoneServices
     * @param bool|null $supportsPolycomPhoneServices
     * @return $this
     */
    public function setSupportsPolycomPhoneServices($supportsPolycomPhoneServices)
    {
        $this->supportsPolycomPhoneServices = $supportsPolycomPhoneServices;
        return $this;
    }


}

