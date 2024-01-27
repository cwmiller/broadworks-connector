<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminAddRequest
 *
 * Add a system or provisioning administrator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2111","type":"sequence"}]
 */
class SystemAdminAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2111
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2111
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2111
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName password
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2111
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2111
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName adminType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType
     * @Group da582a1f8028404e70d260cf1f891033:2111
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType|null
     */
    protected $adminType = null;

    /**
     * @ElementName readOnly
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:2111
     * @var bool|null
     */
    protected $readOnly = null;

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
     * Getter for adminType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType
     */
    public function getAdminType()
    {
        return $this->adminType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->adminType;
    }

    /**
     * Setter for adminType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType $adminType
     * @return $this
     */
    public function setAdminType(\CWM\BroadWorksConnector\Ocip\Models\SystemAdminType $adminType)
    {
        $this->adminType = $adminType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdminType()
    {
        $this->adminType = null;
        return $this;
    }

    /**
     * Getter for readOnly
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->readOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->readOnly;
    }

    /**
     * Setter for readOnly
     *
     * @param bool $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReadOnly()
    {
        $this->readOnly = null;
        return $this;
    }
}

