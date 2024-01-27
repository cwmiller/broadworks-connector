<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupModifyPasscodeRulesRequest
 *
 * Request to modify the service provider's voice portal passcode rules setting.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: ServiceProviderPortalPasscodeRulesModifyRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ServiceProviderPortalPasscodeRulesModifyRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19977","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupModifyPasscodeRulesRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName disallowRepeatedDigits
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @var bool|null
     */
    protected $disallowRepeatedDigits = null;

    /**
     * @ElementName disallowUserNumber
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @var bool|null
     */
    protected $disallowUserNumber = null;

    /**
     * @ElementName disallowReversedUserNumber
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @var bool|null
     */
    protected $disallowReversedUserNumber = null;

    /**
     * @ElementName disallowOldPasscode
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @var bool|null
     */
    protected $disallowOldPasscode = null;

    /**
     * @ElementName disallowReversedOldPasscode
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @var bool|null
     */
    protected $disallowReversedOldPasscode = null;

    /**
     * @ElementName minCodeLength
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @MinInclusive 2
     * @MaxInclusive 15
     * @var int|null
     */
    protected $minCodeLength = null;

    /**
     * @ElementName maxCodeLength
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @MinInclusive 3
     * @MaxInclusive 30
     * @var int|null
     */
    protected $maxCodeLength = null;

    /**
     * @ElementName disableLoginAfterMaxFailedLoginAttempts
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @var bool|null
     */
    protected $disableLoginAfterMaxFailedLoginAttempts = null;

    /**
     * @ElementName maxFailedLoginAttempts
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @MinInclusive 2
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxFailedLoginAttempts = null;

    /**
     * @ElementName expirePassword
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @var bool|null
     */
    protected $expirePassword = null;

    /**
     * @ElementName passcodeExpiresDays
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @MinInclusive 15
     * @MaxInclusive 180
     * @var int|null
     */
    protected $passcodeExpiresDays = null;

    /**
     * @ElementName sendLoginDisabledNotifyEmail
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @var bool|null
     */
    protected $sendLoginDisabledNotifyEmail = null;

    /**
     * @ElementName loginDisabledNotifyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19977
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $loginDisabledNotifyEmailAddress = null;

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
     * Getter for disallowRepeatedDigits
     *
     * @return bool
     */
    public function getDisallowRepeatedDigits()
    {
        return $this->disallowRepeatedDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowRepeatedDigits;
    }

    /**
     * Setter for disallowRepeatedDigits
     *
     * @param bool $disallowRepeatedDigits
     * @return $this
     */
    public function setDisallowRepeatedDigits($disallowRepeatedDigits)
    {
        $this->disallowRepeatedDigits = $disallowRepeatedDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowRepeatedDigits()
    {
        $this->disallowRepeatedDigits = null;
        return $this;
    }

    /**
     * Getter for disallowUserNumber
     *
     * @return bool
     */
    public function getDisallowUserNumber()
    {
        return $this->disallowUserNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowUserNumber;
    }

    /**
     * Setter for disallowUserNumber
     *
     * @param bool $disallowUserNumber
     * @return $this
     */
    public function setDisallowUserNumber($disallowUserNumber)
    {
        $this->disallowUserNumber = $disallowUserNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowUserNumber()
    {
        $this->disallowUserNumber = null;
        return $this;
    }

    /**
     * Getter for disallowReversedUserNumber
     *
     * @return bool
     */
    public function getDisallowReversedUserNumber()
    {
        return $this->disallowReversedUserNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowReversedUserNumber;
    }

    /**
     * Setter for disallowReversedUserNumber
     *
     * @param bool $disallowReversedUserNumber
     * @return $this
     */
    public function setDisallowReversedUserNumber($disallowReversedUserNumber)
    {
        $this->disallowReversedUserNumber = $disallowReversedUserNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowReversedUserNumber()
    {
        $this->disallowReversedUserNumber = null;
        return $this;
    }

    /**
     * Getter for disallowOldPasscode
     *
     * @return bool
     */
    public function getDisallowOldPasscode()
    {
        return $this->disallowOldPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowOldPasscode;
    }

    /**
     * Setter for disallowOldPasscode
     *
     * @param bool $disallowOldPasscode
     * @return $this
     */
    public function setDisallowOldPasscode($disallowOldPasscode)
    {
        $this->disallowOldPasscode = $disallowOldPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowOldPasscode()
    {
        $this->disallowOldPasscode = null;
        return $this;
    }

    /**
     * Getter for disallowReversedOldPasscode
     *
     * @return bool
     */
    public function getDisallowReversedOldPasscode()
    {
        return $this->disallowReversedOldPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowReversedOldPasscode;
    }

    /**
     * Setter for disallowReversedOldPasscode
     *
     * @param bool $disallowReversedOldPasscode
     * @return $this
     */
    public function setDisallowReversedOldPasscode($disallowReversedOldPasscode)
    {
        $this->disallowReversedOldPasscode = $disallowReversedOldPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowReversedOldPasscode()
    {
        $this->disallowReversedOldPasscode = null;
        return $this;
    }

    /**
     * Getter for minCodeLength
     *
     * @return int
     */
    public function getMinCodeLength()
    {
        return $this->minCodeLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minCodeLength;
    }

    /**
     * Setter for minCodeLength
     *
     * @param int $minCodeLength
     * @return $this
     */
    public function setMinCodeLength($minCodeLength)
    {
        $this->minCodeLength = $minCodeLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinCodeLength()
    {
        $this->minCodeLength = null;
        return $this;
    }

    /**
     * Getter for maxCodeLength
     *
     * @return int
     */
    public function getMaxCodeLength()
    {
        return $this->maxCodeLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCodeLength;
    }

    /**
     * Setter for maxCodeLength
     *
     * @param int $maxCodeLength
     * @return $this
     */
    public function setMaxCodeLength($maxCodeLength)
    {
        $this->maxCodeLength = $maxCodeLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCodeLength()
    {
        $this->maxCodeLength = null;
        return $this;
    }

    /**
     * Getter for disableLoginAfterMaxFailedLoginAttempts
     *
     * @return bool
     */
    public function getDisableLoginAfterMaxFailedLoginAttempts()
    {
        return $this->disableLoginAfterMaxFailedLoginAttempts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableLoginAfterMaxFailedLoginAttempts;
    }

    /**
     * Setter for disableLoginAfterMaxFailedLoginAttempts
     *
     * @param bool $disableLoginAfterMaxFailedLoginAttempts
     * @return $this
     */
    public function setDisableLoginAfterMaxFailedLoginAttempts($disableLoginAfterMaxFailedLoginAttempts)
    {
        $this->disableLoginAfterMaxFailedLoginAttempts = $disableLoginAfterMaxFailedLoginAttempts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableLoginAfterMaxFailedLoginAttempts()
    {
        $this->disableLoginAfterMaxFailedLoginAttempts = null;
        return $this;
    }

    /**
     * Getter for maxFailedLoginAttempts
     *
     * @return int
     */
    public function getMaxFailedLoginAttempts()
    {
        return $this->maxFailedLoginAttempts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxFailedLoginAttempts;
    }

    /**
     * Setter for maxFailedLoginAttempts
     *
     * @param int $maxFailedLoginAttempts
     * @return $this
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts)
    {
        $this->maxFailedLoginAttempts = $maxFailedLoginAttempts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxFailedLoginAttempts()
    {
        $this->maxFailedLoginAttempts = null;
        return $this;
    }

    /**
     * Getter for expirePassword
     *
     * @return bool
     */
    public function getExpirePassword()
    {
        return $this->expirePassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expirePassword;
    }

    /**
     * Setter for expirePassword
     *
     * @param bool $expirePassword
     * @return $this
     */
    public function setExpirePassword($expirePassword)
    {
        $this->expirePassword = $expirePassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpirePassword()
    {
        $this->expirePassword = null;
        return $this;
    }

    /**
     * Getter for passcodeExpiresDays
     *
     * @return int
     */
    public function getPasscodeExpiresDays()
    {
        return $this->passcodeExpiresDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcodeExpiresDays;
    }

    /**
     * Setter for passcodeExpiresDays
     *
     * @param int $passcodeExpiresDays
     * @return $this
     */
    public function setPasscodeExpiresDays($passcodeExpiresDays)
    {
        $this->passcodeExpiresDays = $passcodeExpiresDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasscodeExpiresDays()
    {
        $this->passcodeExpiresDays = null;
        return $this;
    }

    /**
     * Getter for sendLoginDisabledNotifyEmail
     *
     * @return bool
     */
    public function getSendLoginDisabledNotifyEmail()
    {
        return $this->sendLoginDisabledNotifyEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendLoginDisabledNotifyEmail;
    }

    /**
     * Setter for sendLoginDisabledNotifyEmail
     *
     * @param bool $sendLoginDisabledNotifyEmail
     * @return $this
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail)
    {
        $this->sendLoginDisabledNotifyEmail = $sendLoginDisabledNotifyEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendLoginDisabledNotifyEmail()
    {
        $this->sendLoginDisabledNotifyEmail = null;
        return $this;
    }

    /**
     * Getter for loginDisabledNotifyEmailAddress
     *
     * @return string|null
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return $this->loginDisabledNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginDisabledNotifyEmailAddress;
    }

    /**
     * Setter for loginDisabledNotifyEmailAddress
     *
     * @param string|null $loginDisabledNotifyEmailAddress
     * @return $this
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
        if ($loginDisabledNotifyEmailAddress === null) {
            $this->loginDisabledNotifyEmailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->loginDisabledNotifyEmailAddress = $loginDisabledNotifyEmailAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginDisabledNotifyEmailAddress()
    {
        $this->loginDisabledNotifyEmailAddress = null;
        return $this;
    }
}

