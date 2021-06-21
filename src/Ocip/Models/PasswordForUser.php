<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForUser
 *
 * Passwords, passcode and SIP authentication passwords to be generated for a user. If the userId is not
 *         included or included but is not an existing user in the group, a password will be generated based on only
 *         the rules applicable for a new user.
 *
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:795","type":"sequence"}]
 */
class PasswordForUser
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:795
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:795
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:795
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName generatePassword
     * @Type bool
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:795
     * @var bool|null
     */
    private $generatePassword = null;

    /**
     * @ElementName generatePasscode
     * @Type bool
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:795
     * @var bool|null
     */
    private $generatePasscode = null;

    /**
     * @ElementName generateSipPassword
     * @Type bool
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:795
     * @var bool|null
     */
    private $generateSipPassword = null;

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
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for generatePassword
     *
     * @return bool
     */
    public function getGeneratePassword()
    {
        return $this->generatePassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->generatePassword;
    }

    /**
     * Setter for generatePassword
     *
     * @param bool $generatePassword
     * @return $this
     */
    public function setGeneratePassword($generatePassword)
    {
        $this->generatePassword = $generatePassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGeneratePassword()
    {
        $this->generatePassword = null;
        return $this;
    }

    /**
     * Getter for generatePasscode
     *
     * @return bool
     */
    public function getGeneratePasscode()
    {
        return $this->generatePasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->generatePasscode;
    }

    /**
     * Setter for generatePasscode
     *
     * @param bool $generatePasscode
     * @return $this
     */
    public function setGeneratePasscode($generatePasscode)
    {
        $this->generatePasscode = $generatePasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGeneratePasscode()
    {
        $this->generatePasscode = null;
        return $this;
    }

    /**
     * Getter for generateSipPassword
     *
     * @return bool
     */
    public function getGenerateSipPassword()
    {
        return $this->generateSipPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->generateSipPassword;
    }

    /**
     * Setter for generateSipPassword
     *
     * @param bool $generateSipPassword
     * @return $this
     */
    public function setGenerateSipPassword($generateSipPassword)
    {
        $this->generateSipPassword = $generateSipPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGenerateSipPassword()
    {
        $this->generateSipPassword = null;
        return $this;
    }


}

