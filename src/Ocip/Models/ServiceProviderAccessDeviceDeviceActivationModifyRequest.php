<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceDeviceActivationModifyRequest
 *
 * Activates or deactivates a device configured at the Service Provider level. It is only possible 
 *         for this request to activate a device which is deactivated. Trying to activate a 
 *         device in the activating state will result in an error response since only the DAS is  
 *         allowed to execute this operation.
 *         Returns a SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:495","type":"sequence"}]
 */
class ServiceProviderAccessDeviceDeviceActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:495
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:495
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName activateDevice
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:495
     * @var bool|null
     */
    protected $activateDevice = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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
     * Getter for activateDevice
     *
     * @return bool
     */
    public function getActivateDevice()
    {
        return $this->activateDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateDevice;
    }

    /**
     * Setter for activateDevice
     *
     * @param bool $activateDevice
     * @return $this
     */
    public function setActivateDevice($activateDevice)
    {
        $this->activateDevice = $activateDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivateDevice()
    {
        $this->activateDevice = null;
        return $this;
    }
}

