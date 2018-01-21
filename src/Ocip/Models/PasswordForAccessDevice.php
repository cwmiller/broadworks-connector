<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForAccessDevice
 *
 * Passwords to be generated for an access device.
 *         The combination of serviceProviderId, groupId, and deviceName will be
 * used
 *         to find the device if it exists. If the device doesn't exist yet, then
 *         the serviceProviderId and groupId will be used to choose the password
 *         rules with which to generate the device password.
 */
class PasswordForAccessDevice
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName generateDeviceAuthenticationPassword
     * @var bool|null
     */
    private $generateDeviceAuthenticationPassword = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Getter for generateDeviceAuthenticationPassword
     *
     * @ElementName generateDeviceAuthenticationPassword
     * @return bool|null
     */
    public function getGenerateDeviceAuthenticationPassword()
    {
        return $this->generateDeviceAuthenticationPassword;
    }

    /**
     * Setter for generateDeviceAuthenticationPassword
     *
     * @ElementName generateDeviceAuthenticationPassword
     * @param bool|null $generateDeviceAuthenticationPassword
     * @return $this
     */
    public function setGenerateDeviceAuthenticationPassword($generateDeviceAuthenticationPassword)
    {
        $this->generateDeviceAuthenticationPassword = $generateDeviceAuthenticationPassword;
        return $this;
    }


}

