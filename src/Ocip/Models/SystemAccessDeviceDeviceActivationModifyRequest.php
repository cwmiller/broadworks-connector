<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceDeviceActivationModifyRequest
 *
 * Activates or deactivates a device configured at the System level. It is only possible for this request to
 *         activate a device which is deactivated. Trying to activate a device in the activating state will result in an error response
 *         since only the DAS is allowed to execute this operation.
 *         Returns a SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:926","type":"sequence"}]
 */
class SystemAccessDeviceDeviceActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:926
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName activateDevice
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:926
     * @var bool|null
     */
    private $activateDevice = null;

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

