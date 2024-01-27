<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminModifyRequest
 *
 * Modify the profile for a reseller administrator.
 *         Since old password is not specified here, any password rule related to old password does not apply.          
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:292","type":"sequence"}]
 */
class ResellerAdminModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:292
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Nillable
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:292
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Nillable
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:292
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $lastName = null;

    /**
     * @ElementName password
     * @Type string
     * @Nillable
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:292
     * @MinLength 1
     * @MaxLength 60
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $password = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:292
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName accountDisabled
     * @Type bool
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:292
     * @var bool|null
     */
    protected $accountDisabled = null;

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
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string|null $firstName
     * @return $this
     */
    public function setFirstName($firstName = null)
    {
        if ($firstName === null) {
            $this->firstName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->firstName = $firstName;
        }
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
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string|null $lastName
     * @return $this
     */
    public function setLastName($lastName = null)
    {
        if ($lastName === null) {
            $this->lastName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->lastName = $lastName;
        }
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
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password = null)
    {
        if ($password === null) {
            $this->password = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->password = $password;
        }
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
     * Getter for accountDisabled
     *
     * @return bool
     */
    public function getAccountDisabled()
    {
        return $this->accountDisabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountDisabled;
    }

    /**
     * Setter for accountDisabled
     *
     * @param bool $accountDisabled
     * @return $this
     */
    public function setAccountDisabled($accountDisabled)
    {
        $this->accountDisabled = $accountDisabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountDisabled()
    {
        $this->accountDisabled = null;
        return $this;
    }
}

