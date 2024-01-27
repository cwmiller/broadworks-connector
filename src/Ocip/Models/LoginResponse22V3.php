<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginResponse22V3
 *
 * Response to the OCI login request.
 *         
 *         The following data elements are only returned in AS data mode:
 *           resellerId
 *           tokenRevocationTime
 *           
 *         The parameter tokenRevocationTime is represented in the number of milliseconds
 *         since January 1, 1970, 00:00:00 GMT, and it is set to the more current time between 
 *         the system level token revocation time and user level token revocation time.
 *         
 *         Replaced by LoginRequest22V4 in AS data mode.
 *
 * @see LoginRequest22V4
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:4951","type":"sequence"}]
 */
class LoginResponse22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName loginType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LoginType22
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType22|null
     */
    protected $loginType = null;

    /**
     * @ElementName locale
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @MaxLength 5
     * @var string|null
     */
    protected $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $encoding = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @var bool|null
     */
    protected $isEnterprise = null;

    /**
     * @ElementName passwordExpiresDays
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @var int|null
     */
    protected $passwordExpiresDays = null;

    /**
     * @ElementName userDomain
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $userDomain = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName tokenRevocationTime
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:4951
     * @var string|null
     */
    protected $tokenRevocationTime = null;

    /**
     * Getter for loginType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginType22
     */
    public function getLoginType()
    {
        return $this->loginType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginType;
    }

    /**
     * Setter for loginType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginType22 $loginType
     * @return $this
     */
    public function setLoginType(\CWM\BroadWorksConnector\Ocip\Models\LoginType22 $loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginType()
    {
        $this->loginType = null;
        return $this;
    }

    /**
     * Getter for locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locale;
    }

    /**
     * Setter for locale
     *
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocale()
    {
        $this->locale = null;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncoding()
    {
        $this->encoding = null;
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
     * Getter for isEnterprise
     *
     * @return bool
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @param bool $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnterprise()
    {
        $this->isEnterprise = null;
        return $this;
    }

    /**
     * Getter for passwordExpiresDays
     *
     * @return int
     */
    public function getPasswordExpiresDays()
    {
        return $this->passwordExpiresDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passwordExpiresDays;
    }

    /**
     * Setter for passwordExpiresDays
     *
     * @param int $passwordExpiresDays
     * @return $this
     */
    public function setPasswordExpiresDays($passwordExpiresDays)
    {
        $this->passwordExpiresDays = $passwordExpiresDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasswordExpiresDays()
    {
        $this->passwordExpiresDays = null;
        return $this;
    }

    /**
     * Getter for userDomain
     *
     * @return string
     */
    public function getUserDomain()
    {
        return $this->userDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userDomain;
    }

    /**
     * Setter for userDomain
     *
     * @param string $userDomain
     * @return $this
     */
    public function setUserDomain($userDomain)
    {
        $this->userDomain = $userDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserDomain()
    {
        $this->userDomain = null;
        return $this;
    }

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for tokenRevocationTime
     *
     * @return string
     */
    public function getTokenRevocationTime()
    {
        return $this->tokenRevocationTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tokenRevocationTime;
    }

    /**
     * Setter for tokenRevocationTime
     *
     * @param string $tokenRevocationTime
     * @return $this
     */
    public function setTokenRevocationTime($tokenRevocationTime)
    {
        $this->tokenRevocationTime = $tokenRevocationTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTokenRevocationTime()
    {
        $this->tokenRevocationTime = null;
        return $this;
    }
}

