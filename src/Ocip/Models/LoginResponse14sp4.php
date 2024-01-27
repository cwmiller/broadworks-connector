<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginResponse14sp4
 *
 * LoginRequest14sp4/Response14sp4 is 2nd stage of the 2 stage OCI login process.
 *
 * @see LoginRequest14sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16885","type":"sequence"}]
 */
class LoginResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName loginType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LoginType
     * @Group d8f04177e438f303b41c211e518706bf:16885
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    protected $loginType = null;

    /**
     * @ElementName locale
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:16885
     * @MaxLength 5
     * @var string|null
     */
    protected $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:16885
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $encoding = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16885
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16885
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:16885
     * @var bool|null
     */
    protected $isEnterprise = null;

    /**
     * @ElementName passwordExpiresDays
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16885
     * @var int|null
     */
    protected $passwordExpiresDays = null;

    /**
     * @ElementName userDomain
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:16885
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $userDomain = null;

    /**
     * Getter for loginType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginType
     */
    public function getLoginType()
    {
        return $this->loginType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginType;
    }

    /**
     * Setter for loginType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType
     * @return $this
     */
    public function setLoginType(\CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType)
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
}

