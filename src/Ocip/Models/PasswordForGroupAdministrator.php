<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForGroupAdministrator
 *
 * Password to be generated for a group administrator. If the administratorId is not included, or included but 
 *         is not an exiting administrator for the group, a password will be generated based on only the rules applicable 
 *         for a new user.
 *
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:669","type":"sequence"}]
 */
class PasswordForGroupAdministrator
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:669
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:669
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName administratorId
     * @Type string
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:669
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $administratorId = null;

    /**
     * @ElementName generatePassword
     * @Type bool
     * @Group ef3c4f453d01f7ce750331de83ebc765:669
     * @var bool|null
     */
    protected $generatePassword = null;

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
     * Getter for administratorId
     *
     * @return string
     */
    public function getAdministratorId()
    {
        return $this->administratorId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->administratorId;
    }

    /**
     * Setter for administratorId
     *
     * @param string $administratorId
     * @return $this
     */
    public function setAdministratorId($administratorId)
    {
        $this->administratorId = $administratorId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdministratorId()
    {
        $this->administratorId = null;
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
}

