<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetLoginInfoResponse21sp1
 *
 * Response to UserGetLoginInfoRequest21sp1
 *
 *                 If a phoneNumber is returned, it will be the primary DN of the user
 *
 *                 The parameter tokenRevocationTime is represented in the number of milliseconds since
 *                 January 1, 1970, 00:00:00 GMT, and it is set to the more current time between the system level
 *                 token revocation time and user level token revocation time.
 *
 *                 Replaced by UserGetLoginInfoResponse22V2.
 *
 * @see UserGetLoginInfoRequest21sp1
 * @see UserGetLoginInfoResponse22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:42567","type":"sequence"}]
 */
class UserGetLoginInfoResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName loginType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LoginType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    private $loginType = null;

    /**
     * @ElementName locale
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @MaxLength 5
     * @var string|null
     */
    private $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $encoding = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName passwordExpiresDays
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @var int|null
     */
    private $passwordExpiresDays = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName tokenRevocationTime
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42567
     * @var string|null
     */
    private $tokenRevocationTime = null;

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
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
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

