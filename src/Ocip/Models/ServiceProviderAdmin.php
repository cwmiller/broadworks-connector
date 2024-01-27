<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdmin
 *
 * The common Service Provider Admin elements.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4898","type":"sequence"}]
 */
class ServiceProviderAdmin
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4898
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4898
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4898
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4898
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4898
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName administratorType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4898
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    protected $administratorType = null;

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
     * Getter for firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstName()
    {
        $this->firstName = null;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastName()
    {
        $this->lastName = null;
        return $this;
    }

    /**
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }

    /**
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for administratorType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     */
    public function getAdministratorType()
    {
        return $this->administratorType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->administratorType;
    }

    /**
     * Setter for administratorType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $administratorType
     * @return $this
     */
    public function setAdministratorType(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $administratorType)
    {
        $this->administratorType = $administratorType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdministratorType()
    {
        $this->administratorType = null;
        return $this;
    }
}

