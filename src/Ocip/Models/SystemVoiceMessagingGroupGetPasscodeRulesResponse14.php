<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetPasscodeRulesResponse14
 *
 * Response to SystemVoiceMessagingGroupGetPasscodeRulesRequest14.
 *         Contains the system voice portal passcode rules setting.
 *         Replaced By: SystemPortalPasscodeRulesGetResponse
 *
 * @see SystemVoiceMessagingGroupGetPasscodeRulesRequest14
 * @see SystemPortalPasscodeRulesGetResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:36053","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetPasscodeRulesResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName disallowRepeatedDigits
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @var bool|null
     */
    private $disallowRepeatedDigits = null;

    /**
     * @ElementName disallowUserNumber
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @var bool|null
     */
    private $disallowUserNumber = null;

    /**
     * @ElementName disallowReversedUserNumber
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @var bool|null
     */
    private $disallowReversedUserNumber = null;

    /**
     * @ElementName disallowOldPasscode
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @var bool|null
     */
    private $disallowOldPasscode = null;

    /**
     * @ElementName disallowReversedOldPasscode
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @var bool|null
     */
    private $disallowReversedOldPasscode = null;

    /**
     * @ElementName minCodeLength
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @MinInclusive 2
     * @MaxInclusive 15
     * @var int|null
     */
    private $minCodeLength = null;

    /**
     * @ElementName maxCodeLength
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @MinInclusive 3
     * @MaxInclusive 30
     * @var int|null
     */
    private $maxCodeLength = null;

    /**
     * @ElementName disableLoginAfterMaxFailedLoginAttempts
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @var bool|null
     */
    private $disableLoginAfterMaxFailedLoginAttempts = null;

    /**
     * @ElementName maxFailedLoginAttempts
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @MinInclusive 2
     * @MaxInclusive 10
     * @var int|null
     */
    private $maxFailedLoginAttempts = null;

    /**
     * @ElementName expirePassword
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @var bool|null
     */
    private $expirePassword = null;

    /**
     * @ElementName passcodeExpiresDays
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @MinInclusive 15
     * @MaxInclusive 180
     * @var int|null
     */
    private $passcodeExpiresDays = null;

    /**
     * @ElementName sendLoginDisabledNotifyEmail
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @var bool|null
     */
    private $sendLoginDisabledNotifyEmail = null;

    /**
     * @ElementName loginDisabledNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $loginDisabledNotifyEmailAddress = null;

    /**
     * @ElementName defaultPassword
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36053
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $defaultPassword = null;

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
     * @return string
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return $this->loginDisabledNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginDisabledNotifyEmailAddress;
    }

    /**
     * Setter for loginDisabledNotifyEmailAddress
     *
     * @param string $loginDisabledNotifyEmailAddress
     * @return $this
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress)
    {
        $this->loginDisabledNotifyEmailAddress = $loginDisabledNotifyEmailAddress;
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

    /**
     * Getter for defaultPassword
     *
     * @return string
     */
    public function getDefaultPassword()
    {
        return $this->defaultPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultPassword;
    }

    /**
     * Setter for defaultPassword
     *
     * @param string $defaultPassword
     * @return $this
     */
    public function setDefaultPassword($defaultPassword)
    {
        $this->defaultPassword = $defaultPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultPassword()
    {
        $this->defaultPassword = null;
        return $this;
    }


}

