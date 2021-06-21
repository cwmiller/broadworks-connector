<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordGenerateResponse
 *
 * Response to the PasswordGenerateRequest.
 *         The response contains the requested passwords.
 *
 * @see PasswordGenerateRequest
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:397","type":"sequence"}]
 */
class PasswordGenerateResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemAdministratorPassword
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:397
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $systemAdministratorPassword = null;

    /**
     * @ElementName serviceProviderAdministratorPassword
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:397
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $serviceProviderAdministratorPassword = null;

    /**
     * @ElementName groupAdministratorPassword
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:397
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $groupAdministratorPassword = null;

    /**
     * @ElementName userPassword
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:397
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $userPassword = null;

    /**
     * @ElementName userPasscode
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:397
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $userPasscode = null;

    /**
     * @ElementName userSIPAuthenticationPassword
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:397
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $userSIPAuthenticationPassword = null;

    /**
     * @ElementName accessDeviceAuthenticationPassword
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:397
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $accessDeviceAuthenticationPassword = null;

    /**
     * @ElementName trunkGroupAuthenticationPassword
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:397
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $trunkGroupAuthenticationPassword = null;

    /**
     * Getter for systemAdministratorPassword
     *
     * @return string
     */
    public function getSystemAdministratorPassword()
    {
        return $this->systemAdministratorPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemAdministratorPassword;
    }

    /**
     * Setter for systemAdministratorPassword
     *
     * @param string $systemAdministratorPassword
     * @return $this
     */
    public function setSystemAdministratorPassword($systemAdministratorPassword)
    {
        $this->systemAdministratorPassword = $systemAdministratorPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemAdministratorPassword()
    {
        $this->systemAdministratorPassword = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdministratorPassword
     *
     * @return string
     */
    public function getServiceProviderAdministratorPassword()
    {
        return $this->serviceProviderAdministratorPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdministratorPassword;
    }

    /**
     * Setter for serviceProviderAdministratorPassword
     *
     * @param string $serviceProviderAdministratorPassword
     * @return $this
     */
    public function setServiceProviderAdministratorPassword($serviceProviderAdministratorPassword)
    {
        $this->serviceProviderAdministratorPassword = $serviceProviderAdministratorPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdministratorPassword()
    {
        $this->serviceProviderAdministratorPassword = null;
        return $this;
    }

    /**
     * Getter for groupAdministratorPassword
     *
     * @return string
     */
    public function getGroupAdministratorPassword()
    {
        return $this->groupAdministratorPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdministratorPassword;
    }

    /**
     * Setter for groupAdministratorPassword
     *
     * @param string $groupAdministratorPassword
     * @return $this
     */
    public function setGroupAdministratorPassword($groupAdministratorPassword)
    {
        $this->groupAdministratorPassword = $groupAdministratorPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdministratorPassword()
    {
        $this->groupAdministratorPassword = null;
        return $this;
    }

    /**
     * Getter for userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPassword;
    }

    /**
     * Setter for userPassword
     *
     * @param string $userPassword
     * @return $this
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserPassword()
    {
        $this->userPassword = null;
        return $this;
    }

    /**
     * Getter for userPasscode
     *
     * @return string
     */
    public function getUserPasscode()
    {
        return $this->userPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPasscode;
    }

    /**
     * Setter for userPasscode
     *
     * @param string $userPasscode
     * @return $this
     */
    public function setUserPasscode($userPasscode)
    {
        $this->userPasscode = $userPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserPasscode()
    {
        $this->userPasscode = null;
        return $this;
    }

    /**
     * Getter for userSIPAuthenticationPassword
     *
     * @return string
     */
    public function getUserSIPAuthenticationPassword()
    {
        return $this->userSIPAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userSIPAuthenticationPassword;
    }

    /**
     * Setter for userSIPAuthenticationPassword
     *
     * @param string $userSIPAuthenticationPassword
     * @return $this
     */
    public function setUserSIPAuthenticationPassword($userSIPAuthenticationPassword)
    {
        $this->userSIPAuthenticationPassword = $userSIPAuthenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserSIPAuthenticationPassword()
    {
        $this->userSIPAuthenticationPassword = null;
        return $this;
    }

    /**
     * Getter for accessDeviceAuthenticationPassword
     *
     * @return string
     */
    public function getAccessDeviceAuthenticationPassword()
    {
        return $this->accessDeviceAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceAuthenticationPassword;
    }

    /**
     * Setter for accessDeviceAuthenticationPassword
     *
     * @param string $accessDeviceAuthenticationPassword
     * @return $this
     */
    public function setAccessDeviceAuthenticationPassword($accessDeviceAuthenticationPassword)
    {
        $this->accessDeviceAuthenticationPassword = $accessDeviceAuthenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceAuthenticationPassword()
    {
        $this->accessDeviceAuthenticationPassword = null;
        return $this;
    }

    /**
     * Getter for trunkGroupAuthenticationPassword
     *
     * @return string
     */
    public function getTrunkGroupAuthenticationPassword()
    {
        return $this->trunkGroupAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupAuthenticationPassword;
    }

    /**
     * Setter for trunkGroupAuthenticationPassword
     *
     * @param string $trunkGroupAuthenticationPassword
     * @return $this
     */
    public function setTrunkGroupAuthenticationPassword($trunkGroupAuthenticationPassword)
    {
        $this->trunkGroupAuthenticationPassword = $trunkGroupAuthenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupAuthenticationPassword()
    {
        $this->trunkGroupAuthenticationPassword = null;
        return $this;
    }


}

