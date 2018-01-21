<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForUser
 *
 * Passwords, passcode and SIP authentication passwords to be generated for a user.
 * If the userId is not
 *         included or included but is not an existing user in the group, a
 * password will be generated based on only
 *         the rules applicable for a new user.
 */
class PasswordForUser
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
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName generatePassword
     * @var bool|null
     */
    private $generatePassword = null;

    /**
     * @ElementName generatePasscode
     * @var bool|null
     */
    private $generatePasscode = null;

    /**
     * @ElementName generateSipPassword
     * @var bool|null
     */
    private $generateSipPassword = null;

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
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for generatePassword
     *
     * @ElementName generatePassword
     * @return bool|null
     */
    public function getGeneratePassword()
    {
        return $this->generatePassword;
    }

    /**
     * Setter for generatePassword
     *
     * @ElementName generatePassword
     * @param bool|null $generatePassword
     * @return $this
     */
    public function setGeneratePassword($generatePassword)
    {
        $this->generatePassword = $generatePassword;
        return $this;
    }

    /**
     * Getter for generatePasscode
     *
     * @ElementName generatePasscode
     * @return bool|null
     */
    public function getGeneratePasscode()
    {
        return $this->generatePasscode;
    }

    /**
     * Setter for generatePasscode
     *
     * @ElementName generatePasscode
     * @param bool|null $generatePasscode
     * @return $this
     */
    public function setGeneratePasscode($generatePasscode)
    {
        $this->generatePasscode = $generatePasscode;
        return $this;
    }

    /**
     * Getter for generateSipPassword
     *
     * @ElementName generateSipPassword
     * @return bool|null
     */
    public function getGenerateSipPassword()
    {
        return $this->generateSipPassword;
    }

    /**
     * Setter for generateSipPassword
     *
     * @ElementName generateSipPassword
     * @param bool|null $generateSipPassword
     * @return $this
     */
    public function setGenerateSipPassword($generateSipPassword)
    {
        $this->generateSipPassword = $generateSipPassword;
        return $this;
    }


}

