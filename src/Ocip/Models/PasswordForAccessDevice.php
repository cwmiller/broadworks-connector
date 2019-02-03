<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForAccessDevice
 *
 * Passwords to be generated for an access device.
 *         The combination of serviceProviderId, groupId, and deviceName will be used
 *         to find the device if it exists. If the device doesn't exist yet, then
 *         the serviceProviderId and groupId will be used to choose the password
 *         rules with which to generate the device password.
 *
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:773","type":"sequence"}]
 */
class PasswordForAccessDevice
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:773
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:773
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:773
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName generateDeviceAuthenticationPassword
     * @Type bool
     * @Group 6b27fcc79475236456fc113a42b75543:773
     * @var bool|null
     */
    private $generateDeviceAuthenticationPassword = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
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
     * Getter for generateDeviceAuthenticationPassword
     *
     * @return bool
     */
    public function getGenerateDeviceAuthenticationPassword()
    {
        return $this->generateDeviceAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->generateDeviceAuthenticationPassword;
    }

    /**
     * Setter for generateDeviceAuthenticationPassword
     *
     * @param bool $generateDeviceAuthenticationPassword
     * @return $this
     */
    public function setGenerateDeviceAuthenticationPassword($generateDeviceAuthenticationPassword)
    {
        $this->generateDeviceAuthenticationPassword = $generateDeviceAuthenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGenerateDeviceAuthenticationPassword()
    {
        $this->generateDeviceAuthenticationPassword = null;
        return $this;
    }


}

