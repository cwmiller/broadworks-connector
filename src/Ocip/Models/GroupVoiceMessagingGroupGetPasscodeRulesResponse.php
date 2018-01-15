<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetPasscodeRulesResponse
 *
 * Response to GroupVoiceMessagingGroupGetPasscodeRulesRequest.
 *         Contains the group's voice portal passcode rules setting.
 *         Replaced By: GroupPortalPasscodeRulesGetResponse
 */
class GroupVoiceMessagingGroupGetPasscodeRulesResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useRuleLevel
     * @var string|null
     */
    private $useRuleLevel = null;

    /**
     * @ElementName disallowRepeatedDigits
     * @var bool|null
     */
    private $disallowRepeatedDigits = null;

    /**
     * @ElementName disallowUserNumber
     * @var bool|null
     */
    private $disallowUserNumber = null;

    /**
     * @ElementName disallowReversedUserNumber
     * @var bool|null
     */
    private $disallowReversedUserNumber = null;

    /**
     * @ElementName disallowOldPasscode
     * @var bool|null
     */
    private $disallowOldPasscode = null;

    /**
     * @ElementName disallowReversedOldPasscode
     * @var bool|null
     */
    private $disallowReversedOldPasscode = null;

    /**
     * @ElementName minCodeLength
     * @var int|null
     */
    private $minCodeLength = null;

    /**
     * @ElementName maxCodeLength
     * @var int|null
     */
    private $maxCodeLength = null;

    /**
     * @ElementName disableLoginAfterMaxFailedLoginAttempts
     * @var bool|null
     */
    private $disableLoginAfterMaxFailedLoginAttempts = null;

    /**
     * @ElementName maxFailedLoginAttempts
     * @var int|null
     */
    private $maxFailedLoginAttempts = null;

    /**
     * @ElementName expirePassword
     * @var bool|null
     */
    private $expirePassword = null;

    /**
     * @ElementName passcodeExpiresDays
     * @var int|null
     */
    private $passcodeExpiresDays = null;

    /**
     * @ElementName sendLoginDisabledNotifyEmail
     * @var bool|null
     */
    private $sendLoginDisabledNotifyEmail = null;

    /**
     * @ElementName loginDisabledNotifyEmailAddress
     * @var string|null
     */
    private $loginDisabledNotifyEmailAddress = null;

    /**
     * Getter for useRuleLevel
     *
     * @ElementName useRuleLevel
     * @return string|null
     */
    public function getUseRuleLevel()
    {
        return $this->useRuleLevel;
    }

    /**
     * Setter for useRuleLevel
     *
     * @ElementName useRuleLevel
     * @param string|null $useRuleLevel
     * @return $this
     */
    public function setUseRuleLevel($useRuleLevel)
    {
        $this->useRuleLevel = $useRuleLevel;
        return $this;
    }

    /**
     * Getter for disallowRepeatedDigits
     *
     * @ElementName disallowRepeatedDigits
     * @return bool|null
     */
    public function getDisallowRepeatedDigits()
    {
        return $this->disallowRepeatedDigits;
    }

    /**
     * Setter for disallowRepeatedDigits
     *
     * @ElementName disallowRepeatedDigits
     * @param bool|null $disallowRepeatedDigits
     * @return $this
     */
    public function setDisallowRepeatedDigits($disallowRepeatedDigits)
    {
        $this->disallowRepeatedDigits = $disallowRepeatedDigits;
        return $this;
    }

    /**
     * Getter for disallowUserNumber
     *
     * @ElementName disallowUserNumber
     * @return bool|null
     */
    public function getDisallowUserNumber()
    {
        return $this->disallowUserNumber;
    }

    /**
     * Setter for disallowUserNumber
     *
     * @ElementName disallowUserNumber
     * @param bool|null $disallowUserNumber
     * @return $this
     */
    public function setDisallowUserNumber($disallowUserNumber)
    {
        $this->disallowUserNumber = $disallowUserNumber;
        return $this;
    }

    /**
     * Getter for disallowReversedUserNumber
     *
     * @ElementName disallowReversedUserNumber
     * @return bool|null
     */
    public function getDisallowReversedUserNumber()
    {
        return $this->disallowReversedUserNumber;
    }

    /**
     * Setter for disallowReversedUserNumber
     *
     * @ElementName disallowReversedUserNumber
     * @param bool|null $disallowReversedUserNumber
     * @return $this
     */
    public function setDisallowReversedUserNumber($disallowReversedUserNumber)
    {
        $this->disallowReversedUserNumber = $disallowReversedUserNumber;
        return $this;
    }

    /**
     * Getter for disallowOldPasscode
     *
     * @ElementName disallowOldPasscode
     * @return bool|null
     */
    public function getDisallowOldPasscode()
    {
        return $this->disallowOldPasscode;
    }

    /**
     * Setter for disallowOldPasscode
     *
     * @ElementName disallowOldPasscode
     * @param bool|null $disallowOldPasscode
     * @return $this
     */
    public function setDisallowOldPasscode($disallowOldPasscode)
    {
        $this->disallowOldPasscode = $disallowOldPasscode;
        return $this;
    }

    /**
     * Getter for disallowReversedOldPasscode
     *
     * @ElementName disallowReversedOldPasscode
     * @return bool|null
     */
    public function getDisallowReversedOldPasscode()
    {
        return $this->disallowReversedOldPasscode;
    }

    /**
     * Setter for disallowReversedOldPasscode
     *
     * @ElementName disallowReversedOldPasscode
     * @param bool|null $disallowReversedOldPasscode
     * @return $this
     */
    public function setDisallowReversedOldPasscode($disallowReversedOldPasscode)
    {
        $this->disallowReversedOldPasscode = $disallowReversedOldPasscode;
        return $this;
    }

    /**
     * Getter for minCodeLength
     *
     * @ElementName minCodeLength
     * @return int|null
     */
    public function getMinCodeLength()
    {
        return $this->minCodeLength;
    }

    /**
     * Setter for minCodeLength
     *
     * @ElementName minCodeLength
     * @param int|null $minCodeLength
     * @return $this
     */
    public function setMinCodeLength($minCodeLength)
    {
        $this->minCodeLength = $minCodeLength;
        return $this;
    }

    /**
     * Getter for maxCodeLength
     *
     * @ElementName maxCodeLength
     * @return int|null
     */
    public function getMaxCodeLength()
    {
        return $this->maxCodeLength;
    }

    /**
     * Setter for maxCodeLength
     *
     * @ElementName maxCodeLength
     * @param int|null $maxCodeLength
     * @return $this
     */
    public function setMaxCodeLength($maxCodeLength)
    {
        $this->maxCodeLength = $maxCodeLength;
        return $this;
    }

    /**
     * Getter for disableLoginAfterMaxFailedLoginAttempts
     *
     * @ElementName disableLoginAfterMaxFailedLoginAttempts
     * @return bool|null
     */
    public function getDisableLoginAfterMaxFailedLoginAttempts()
    {
        return $this->disableLoginAfterMaxFailedLoginAttempts;
    }

    /**
     * Setter for disableLoginAfterMaxFailedLoginAttempts
     *
     * @ElementName disableLoginAfterMaxFailedLoginAttempts
     * @param bool|null $disableLoginAfterMaxFailedLoginAttempts
     * @return $this
     */
    public function setDisableLoginAfterMaxFailedLoginAttempts($disableLoginAfterMaxFailedLoginAttempts)
    {
        $this->disableLoginAfterMaxFailedLoginAttempts = $disableLoginAfterMaxFailedLoginAttempts;
        return $this;
    }

    /**
     * Getter for maxFailedLoginAttempts
     *
     * @ElementName maxFailedLoginAttempts
     * @return int|null
     */
    public function getMaxFailedLoginAttempts()
    {
        return $this->maxFailedLoginAttempts;
    }

    /**
     * Setter for maxFailedLoginAttempts
     *
     * @ElementName maxFailedLoginAttempts
     * @param int|null $maxFailedLoginAttempts
     * @return $this
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts)
    {
        $this->maxFailedLoginAttempts = $maxFailedLoginAttempts;
        return $this;
    }

    /**
     * Getter for expirePassword
     *
     * @ElementName expirePassword
     * @return bool|null
     */
    public function getExpirePassword()
    {
        return $this->expirePassword;
    }

    /**
     * Setter for expirePassword
     *
     * @ElementName expirePassword
     * @param bool|null $expirePassword
     * @return $this
     */
    public function setExpirePassword($expirePassword)
    {
        $this->expirePassword = $expirePassword;
        return $this;
    }

    /**
     * Getter for passcodeExpiresDays
     *
     * @ElementName passcodeExpiresDays
     * @return int|null
     */
    public function getPasscodeExpiresDays()
    {
        return $this->passcodeExpiresDays;
    }

    /**
     * Setter for passcodeExpiresDays
     *
     * @ElementName passcodeExpiresDays
     * @param int|null $passcodeExpiresDays
     * @return $this
     */
    public function setPasscodeExpiresDays($passcodeExpiresDays)
    {
        $this->passcodeExpiresDays = $passcodeExpiresDays;
        return $this;
    }

    /**
     * Getter for sendLoginDisabledNotifyEmail
     *
     * @ElementName sendLoginDisabledNotifyEmail
     * @return bool|null
     */
    public function getSendLoginDisabledNotifyEmail()
    {
        return $this->sendLoginDisabledNotifyEmail;
    }

    /**
     * Setter for sendLoginDisabledNotifyEmail
     *
     * @ElementName sendLoginDisabledNotifyEmail
     * @param bool|null $sendLoginDisabledNotifyEmail
     * @return $this
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail)
    {
        $this->sendLoginDisabledNotifyEmail = $sendLoginDisabledNotifyEmail;
        return $this;
    }

    /**
     * Getter for loginDisabledNotifyEmailAddress
     *
     * @ElementName loginDisabledNotifyEmailAddress
     * @return string|null
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return $this->loginDisabledNotifyEmailAddress;
    }

    /**
     * Setter for loginDisabledNotifyEmailAddress
     *
     * @ElementName loginDisabledNotifyEmailAddress
     * @param string|null $loginDisabledNotifyEmailAddress
     * @return $this
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress)
    {
        $this->loginDisabledNotifyEmailAddress = $loginDisabledNotifyEmailAddress;
        return $this;
    }


}

