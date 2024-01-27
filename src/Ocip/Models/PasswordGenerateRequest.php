<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordGenerateRequest
 *
 * Generate passwords based on the corresponding password/passcode rules.
 *         The response is either PasswordGenerateResponse or ErrorResponse.
 *
 * @see PasswordGenerateResponse
 * @see ErrorResponse
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:380","type":"sequence"}]
 */
class PasswordGenerateRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName systemAdministratorPassword
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PasswordForSystemAdministrator
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:380
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForSystemAdministrator|null
     */
    protected $systemAdministratorPassword = null;

    /**
     * @ElementName serviceProviderAdministratorPassword
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PasswordForServiceProviderAdministrator
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:380
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForServiceProviderAdministrator|null
     */
    protected $serviceProviderAdministratorPassword = null;

    /**
     * @ElementName groupAdministratorPassword
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PasswordForGroupAdministrator
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:380
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForGroupAdministrator|null
     */
    protected $groupAdministratorPassword = null;

    /**
     * @ElementName userPassword
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PasswordForUser
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:380
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForUser|null
     */
    protected $userPassword = null;

    /**
     * @ElementName accessDeviceAuthenticationPassword
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PasswordForAccessDevice
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:380
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForAccessDevice|null
     */
    protected $accessDeviceAuthenticationPassword = null;

    /**
     * @ElementName trunkGroupAuthenticationPassword
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PasswordForTrunkGroup
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:380
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForTrunkGroup|null
     */
    protected $trunkGroupAuthenticationPassword = null;

    /**
     * Getter for systemAdministratorPassword
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForSystemAdministrator
     */
    public function getSystemAdministratorPassword()
    {
        return $this->systemAdministratorPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemAdministratorPassword;
    }

    /**
     * Setter for systemAdministratorPassword
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForSystemAdministrator $systemAdministratorPassword
     * @return $this
     */
    public function setSystemAdministratorPassword(\CWM\BroadWorksConnector\Ocip\Models\PasswordForSystemAdministrator $systemAdministratorPassword)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForServiceProviderAdministrator
     */
    public function getServiceProviderAdministratorPassword()
    {
        return $this->serviceProviderAdministratorPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdministratorPassword;
    }

    /**
     * Setter for serviceProviderAdministratorPassword
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForServiceProviderAdministrator $serviceProviderAdministratorPassword
     * @return $this
     */
    public function setServiceProviderAdministratorPassword(\CWM\BroadWorksConnector\Ocip\Models\PasswordForServiceProviderAdministrator $serviceProviderAdministratorPassword)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForGroupAdministrator
     */
    public function getGroupAdministratorPassword()
    {
        return $this->groupAdministratorPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdministratorPassword;
    }

    /**
     * Setter for groupAdministratorPassword
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForGroupAdministrator $groupAdministratorPassword
     * @return $this
     */
    public function setGroupAdministratorPassword(\CWM\BroadWorksConnector\Ocip\Models\PasswordForGroupAdministrator $groupAdministratorPassword)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForUser
     */
    public function getUserPassword()
    {
        return $this->userPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPassword;
    }

    /**
     * Setter for userPassword
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForUser $userPassword
     * @return $this
     */
    public function setUserPassword(\CWM\BroadWorksConnector\Ocip\Models\PasswordForUser $userPassword)
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
     * Getter for accessDeviceAuthenticationPassword
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForAccessDevice
     */
    public function getAccessDeviceAuthenticationPassword()
    {
        return $this->accessDeviceAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceAuthenticationPassword;
    }

    /**
     * Setter for accessDeviceAuthenticationPassword
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForAccessDevice $accessDeviceAuthenticationPassword
     * @return $this
     */
    public function setAccessDeviceAuthenticationPassword(\CWM\BroadWorksConnector\Ocip\Models\PasswordForAccessDevice $accessDeviceAuthenticationPassword)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForTrunkGroup
     */
    public function getTrunkGroupAuthenticationPassword()
    {
        return $this->trunkGroupAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupAuthenticationPassword;
    }

    /**
     * Setter for trunkGroupAuthenticationPassword
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForTrunkGroup $trunkGroupAuthenticationPassword
     * @return $this
     */
    public function setTrunkGroupAuthenticationPassword(\CWM\BroadWorksConnector\Ocip\Models\PasswordForTrunkGroup $trunkGroupAuthenticationPassword)
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

