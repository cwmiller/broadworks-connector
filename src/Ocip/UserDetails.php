<?php

namespace CWM\BroadWorksConnector\Ocip;

class UserDetails
{
    /**
     * @var string|null
     */
    private $loginType = null;

    /**
     * @var string|null
     */
    private $locale = null;

    /**
     * @var string|null
     */
    private $encoding = null;

    /**
     * @var string|null
     */
    private $groupId = null;

    /**
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @var int|null
     */
    private $passwordExpiresDays = null;

    /**
     * @var string|null
     */
    private $userDomain = null;

    /**
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @return null|string
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * @param null|string $loginType
     * @return UserDetails
     */
    public function setLoginType($loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param null|string $locale
     * @return UserDetails
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param null|string $encoding
     * @return UserDetails
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param null|string $groupId
     * @return UserDetails
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * @param null|string $serviceProviderId
     * @return UserDetails
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getisEnterprise()
    {
        return $this->isEnterprise;
    }

    /**
     * @param bool|null $isEnterprise
     * @return UserDetails
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPasswordExpiresDays()
    {
        return $this->passwordExpiresDays;
    }

    /**
     * @param int|null $passwordExpiresDays
     * @return UserDetails
     */
    public function setPasswordExpiresDays($passwordExpiresDays)
    {
        $this->passwordExpiresDays = $passwordExpiresDays;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserDomain()
    {
        return $this->userDomain;
    }

    /**
     * @param null|string $userDomain
     * @return UserDetails
     */
    public function setUserDomain($userDomain)
    {
        $this->userDomain = $userDomain;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * @param null|string $resellerId
     * @return UserDetails
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }
}