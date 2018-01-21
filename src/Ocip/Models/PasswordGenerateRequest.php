<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordGenerateRequest
 *
 * Generate passwords based on the corresponding password/passcode rules.
 *         The response is either PasswordGenerateResponse or ErrorResponse.
 */
class PasswordGenerateRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemAdministratorPassword
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForSystemAdministrator|null
     */
    private $systemAdministratorPassword = null;

    /**
     * @ElementName serviceProviderAdministratorPassword
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForServiceProviderAdministrator|null
     */
    private $serviceProviderAdministratorPassword = null;

    /**
     * @ElementName groupAdministratorPassword
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForGroupAdministrator|null
     */
    private $groupAdministratorPassword = null;

    /**
     * @ElementName userPassword
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForUser|null
     */
    private $userPassword = null;

    /**
     * @ElementName accessDeviceAuthenticationPassword
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForAccessDevice|null
     */
    private $accessDeviceAuthenticationPassword = null;

    /**
     * @ElementName trunkGroupAuthenticationPassword
     * @var \CWM\BroadWorksConnector\Ocip\Models\PasswordForTrunkGroup|null
     */
    private $trunkGroupAuthenticationPassword = null;

    /**
     * Getter for systemAdministratorPassword
     *
     * @ElementName systemAdministratorPassword
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForSystemAdministrator|null
     */
    public function getSystemAdministratorPassword()
    {
        return $this->systemAdministratorPassword;
    }

    /**
     * Setter for systemAdministratorPassword
     *
     * @ElementName systemAdministratorPassword
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForSystemAdministrator|null $systemAdministratorPassword
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForServiceProviderAdministrator|null
     */
    public function getServiceProviderAdministratorPassword()
    {
        return $this->serviceProviderAdministratorPassword;
    }

    /**
     * Setter for serviceProviderAdministratorPassword
     *
     * @ElementName serviceProviderAdministratorPassword
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForServiceProviderAdministrator|null $serviceProviderAdministratorPassword
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForGroupAdministrator|null
     */
    public function getGroupAdministratorPassword()
    {
        return $this->groupAdministratorPassword;
    }

    /**
     * Setter for groupAdministratorPassword
     *
     * @ElementName groupAdministratorPassword
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForGroupAdministrator|null $groupAdministratorPassword
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForUser|null
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Setter for userPassword
     *
     * @ElementName userPassword
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForUser|null $userPassword
     * @return $this
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
        return $this;
    }

    /**
     * Getter for accessDeviceAuthenticationPassword
     *
     * @ElementName accessDeviceAuthenticationPassword
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForAccessDevice|null
     */
    public function getAccessDeviceAuthenticationPassword()
    {
        return $this->accessDeviceAuthenticationPassword;
    }

    /**
     * Setter for accessDeviceAuthenticationPassword
     *
     * @ElementName accessDeviceAuthenticationPassword
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForAccessDevice|null $accessDeviceAuthenticationPassword
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PasswordForTrunkGroup|null
     */
    public function getTrunkGroupAuthenticationPassword()
    {
        return $this->trunkGroupAuthenticationPassword;
    }

    /**
     * Setter for trunkGroupAuthenticationPassword
     *
     * @ElementName trunkGroupAuthenticationPassword
     * @param \CWM\BroadWorksConnector\Ocip\Models\PasswordForTrunkGroup|null $trunkGroupAuthenticationPassword
     * @return $this
     */
    public function setTrunkGroupAuthenticationPassword($trunkGroupAuthenticationPassword)
    {
        $this->trunkGroupAuthenticationPassword = $trunkGroupAuthenticationPassword;
        return $this;
    }


}

