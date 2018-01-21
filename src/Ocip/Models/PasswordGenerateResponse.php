<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordGenerateResponse
 *
 * Response to the PasswordGenerateRequest.
 *         The response contains the requested passwords.
 */
class PasswordGenerateResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemAdministratorPassword
     * @var string|null
     */
    private $systemAdministratorPassword = null;

    /**
     * @ElementName serviceProviderAdministratorPassword
     * @var string|null
     */
    private $serviceProviderAdministratorPassword = null;

    /**
     * @ElementName groupAdministratorPassword
     * @var string|null
     */
    private $groupAdministratorPassword = null;

    /**
     * @ElementName userPassword
     * @var string|null
     */
    private $userPassword = null;

    /**
     * @ElementName userPasscode
     * @var string|null
     */
    private $userPasscode = null;

    /**
     * @ElementName userSIPAuthenticationPassword
     * @var string|null
     */
    private $userSIPAuthenticationPassword = null;

    /**
     * @ElementName accessDeviceAuthenticationPassword
     * @var string|null
     */
    private $accessDeviceAuthenticationPassword = null;

    /**
     * @ElementName trunkGroupAuthenticationPassword
     * @var string|null
     */
    private $trunkGroupAuthenticationPassword = null;

    /**
     * Getter for systemAdministratorPassword
     *
     * @ElementName systemAdministratorPassword
     * @return string|null
     */
    public function getSystemAdministratorPassword()
    {
        return $this->systemAdministratorPassword;
    }

    /**
     * Setter for systemAdministratorPassword
     *
     * @ElementName systemAdministratorPassword
     * @param string|null $systemAdministratorPassword
     * @return $this
     */
    public function setSystemAdministratorPassword($systemAdministratorPassword)
    {
        $this->systemAdministratorPassword = $systemAdministratorPassword;
        return $this;
    }

    /**
     * Getter for serviceProviderAdministratorPassword
     *
     * @ElementName serviceProviderAdministratorPassword
     * @return string|null
     */
    public function getServiceProviderAdministratorPassword()
    {
        return $this->serviceProviderAdministratorPassword;
    }

    /**
     * Setter for serviceProviderAdministratorPassword
     *
     * @ElementName serviceProviderAdministratorPassword
     * @param string|null $serviceProviderAdministratorPassword
     * @return $this
     */
    public function setServiceProviderAdministratorPassword($serviceProviderAdministratorPassword)
    {
        $this->serviceProviderAdministratorPassword = $serviceProviderAdministratorPassword;
        return $this;
    }

    /**
     * Getter for groupAdministratorPassword
     *
     * @ElementName groupAdministratorPassword
     * @return string|null
     */
    public function getGroupAdministratorPassword()
    {
        return $this->groupAdministratorPassword;
    }

    /**
     * Setter for groupAdministratorPassword
     *
     * @ElementName groupAdministratorPassword
     * @param string|null $groupAdministratorPassword
     * @return $this
     */
    public function setGroupAdministratorPassword($groupAdministratorPassword)
    {
        $this->groupAdministratorPassword = $groupAdministratorPassword;
        return $this;
    }

    /**
     * Getter for userPassword
     *
     * @ElementName userPassword
     * @return string|null
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Setter for userPassword
     *
     * @ElementName userPassword
     * @param string|null $userPassword
     * @return $this
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
        return $this;
    }

    /**
     * Getter for userPasscode
     *
     * @ElementName userPasscode
     * @return string|null
     */
    public function getUserPasscode()
    {
        return $this->userPasscode;
    }

    /**
     * Setter for userPasscode
     *
     * @ElementName userPasscode
     * @param string|null $userPasscode
     * @return $this
     */
    public function setUserPasscode($userPasscode)
    {
        $this->userPasscode = $userPasscode;
        return $this;
    }

    /**
     * Getter for userSIPAuthenticationPassword
     *
     * @ElementName userSIPAuthenticationPassword
     * @return string|null
     */
    public function getUserSIPAuthenticationPassword()
    {
        return $this->userSIPAuthenticationPassword;
    }

    /**
     * Setter for userSIPAuthenticationPassword
     *
     * @ElementName userSIPAuthenticationPassword
     * @param string|null $userSIPAuthenticationPassword
     * @return $this
     */
    public function setUserSIPAuthenticationPassword($userSIPAuthenticationPassword)
    {
        $this->userSIPAuthenticationPassword = $userSIPAuthenticationPassword;
        return $this;
    }

    /**
     * Getter for accessDeviceAuthenticationPassword
     *
     * @ElementName accessDeviceAuthenticationPassword
     * @return string|null
     */
    public function getAccessDeviceAuthenticationPassword()
    {
        return $this->accessDeviceAuthenticationPassword;
    }

    /**
     * Setter for accessDeviceAuthenticationPassword
     *
     * @ElementName accessDeviceAuthenticationPassword
     * @param string|null $accessDeviceAuthenticationPassword
     * @return $this
     */
    public function setAccessDeviceAuthenticationPassword($accessDeviceAuthenticationPassword)
    {
        $this->accessDeviceAuthenticationPassword = $accessDeviceAuthenticationPassword;
        return $this;
    }

    /**
     * Getter for trunkGroupAuthenticationPassword
     *
     * @ElementName trunkGroupAuthenticationPassword
     * @return string|null
     */
    public function getTrunkGroupAuthenticationPassword()
    {
        return $this->trunkGroupAuthenticationPassword;
    }

    /**
     * Setter for trunkGroupAuthenticationPassword
     *
     * @ElementName trunkGroupAuthenticationPassword
     * @param string|null $trunkGroupAuthenticationPassword
     * @return $this
     */
    public function setTrunkGroupAuthenticationPassword($trunkGroupAuthenticationPassword)
    {
        $this->trunkGroupAuthenticationPassword = $trunkGroupAuthenticationPassword;
        return $this;
    }


}

