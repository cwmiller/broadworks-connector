<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPortalPasscodeRulesGetResponse19
 *
 * Response to GroupPortalPasscodeRulesGetRequest19.
 *         Contains the group's passcode rules setting.
 *         
 *         The following elements are only used in AS data mode:
 *           numberOfRepeatedDigits
 *           disallowRepeatedPatterns
 *           disallowContiguousSequences
 *           numberOfAscendingDigits
 *           numberOfDescendingDigits
 *           numberOfPreviousPasscodes
 *
 * @see GroupPortalPasscodeRulesGetRequest19
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6063","type":"sequence"}]
 */
class GroupPortalPasscodeRulesGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useRuleLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupPasscodeRulesLevel
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPasscodeRulesLevel|null
     */
    private $useRuleLevel = null;

    /**
     * @ElementName disallowRepeatedDigits
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $disallowRepeatedDigits = null;

    /**
     * @ElementName numberOfRepeatedDigits
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var int|null
     */
    private $numberOfRepeatedDigits = null;

    /**
     * @ElementName disallowRepeatedPatterns
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $disallowRepeatedPatterns = null;

    /**
     * @ElementName disallowContiguousSequences
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $disallowContiguousSequences = null;

    /**
     * @ElementName numberOfAscendingDigits
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var int|null
     */
    private $numberOfAscendingDigits = null;

    /**
     * @ElementName numberOfDescendingDigits
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var int|null
     */
    private $numberOfDescendingDigits = null;

    /**
     * @ElementName disallowUserNumber
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $disallowUserNumber = null;

    /**
     * @ElementName disallowReversedUserNumber
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $disallowReversedUserNumber = null;

    /**
     * @ElementName disallowOldPasscode
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $disallowOldPasscode = null;

    /**
     * @ElementName numberOfPreviousPasscodes
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var int|null
     */
    private $numberOfPreviousPasscodes = null;

    /**
     * @ElementName disallowReversedOldPasscode
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $disallowReversedOldPasscode = null;

    /**
     * @ElementName minCodeLength
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var int|null
     */
    private $minCodeLength = null;

    /**
     * @ElementName maxCodeLength
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var int|null
     */
    private $maxCodeLength = null;

    /**
     * @ElementName disableLoginAfterMaxFailedLoginAttempts
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $disableLoginAfterMaxFailedLoginAttempts = null;

    /**
     * @ElementName maxFailedLoginAttempts
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var int|null
     */
    private $maxFailedLoginAttempts = null;

    /**
     * @ElementName expirePassword
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $expirePassword = null;

    /**
     * @ElementName passcodeExpiresDays
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var int|null
     */
    private $passcodeExpiresDays = null;

    /**
     * @ElementName sendLoginDisabledNotifyEmail
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var bool|null
     */
    private $sendLoginDisabledNotifyEmail = null;

    /**
     * @ElementName loginDisabledNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6063
     * @var string|null
     */
    private $loginDisabledNotifyEmailAddress = null;

    /**
     * Getter for useRuleLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPasscodeRulesLevel
     */
    public function getUseRuleLevel()
    {
        return $this->useRuleLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useRuleLevel;
    }

    /**
     * Setter for useRuleLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPasscodeRulesLevel $useRuleLevel
     * @return $this
     */
    public function setUseRuleLevel(\CWM\BroadWorksConnector\Ocip\Models\GroupPasscodeRulesLevel $useRuleLevel)
    {
        $this->useRuleLevel = $useRuleLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseRuleLevel()
    {
        $this->useRuleLevel = null;
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
     * Getter for numberOfRepeatedDigits
     *
     * @return int
     */
    public function getNumberOfRepeatedDigits()
    {
        return $this->numberOfRepeatedDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfRepeatedDigits;
    }

    /**
     * Setter for numberOfRepeatedDigits
     *
     * @param int $numberOfRepeatedDigits
     * @return $this
     */
    public function setNumberOfRepeatedDigits($numberOfRepeatedDigits)
    {
        $this->numberOfRepeatedDigits = $numberOfRepeatedDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfRepeatedDigits()
    {
        $this->numberOfRepeatedDigits = null;
        return $this;
    }

    /**
     * Getter for disallowRepeatedPatterns
     *
     * @return bool
     */
    public function getDisallowRepeatedPatterns()
    {
        return $this->disallowRepeatedPatterns instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowRepeatedPatterns;
    }

    /**
     * Setter for disallowRepeatedPatterns
     *
     * @param bool $disallowRepeatedPatterns
     * @return $this
     */
    public function setDisallowRepeatedPatterns($disallowRepeatedPatterns)
    {
        $this->disallowRepeatedPatterns = $disallowRepeatedPatterns;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowRepeatedPatterns()
    {
        $this->disallowRepeatedPatterns = null;
        return $this;
    }

    /**
     * Getter for disallowContiguousSequences
     *
     * @return bool
     */
    public function getDisallowContiguousSequences()
    {
        return $this->disallowContiguousSequences instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowContiguousSequences;
    }

    /**
     * Setter for disallowContiguousSequences
     *
     * @param bool $disallowContiguousSequences
     * @return $this
     */
    public function setDisallowContiguousSequences($disallowContiguousSequences)
    {
        $this->disallowContiguousSequences = $disallowContiguousSequences;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowContiguousSequences()
    {
        $this->disallowContiguousSequences = null;
        return $this;
    }

    /**
     * Getter for numberOfAscendingDigits
     *
     * @return int
     */
    public function getNumberOfAscendingDigits()
    {
        return $this->numberOfAscendingDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfAscendingDigits;
    }

    /**
     * Setter for numberOfAscendingDigits
     *
     * @param int $numberOfAscendingDigits
     * @return $this
     */
    public function setNumberOfAscendingDigits($numberOfAscendingDigits)
    {
        $this->numberOfAscendingDigits = $numberOfAscendingDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfAscendingDigits()
    {
        $this->numberOfAscendingDigits = null;
        return $this;
    }

    /**
     * Getter for numberOfDescendingDigits
     *
     * @return int
     */
    public function getNumberOfDescendingDigits()
    {
        return $this->numberOfDescendingDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfDescendingDigits;
    }

    /**
     * Setter for numberOfDescendingDigits
     *
     * @param int $numberOfDescendingDigits
     * @return $this
     */
    public function setNumberOfDescendingDigits($numberOfDescendingDigits)
    {
        $this->numberOfDescendingDigits = $numberOfDescendingDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfDescendingDigits()
    {
        $this->numberOfDescendingDigits = null;
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
     * Getter for numberOfPreviousPasscodes
     *
     * @return int
     */
    public function getNumberOfPreviousPasscodes()
    {
        return $this->numberOfPreviousPasscodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfPreviousPasscodes;
    }

    /**
     * Setter for numberOfPreviousPasscodes
     *
     * @param int $numberOfPreviousPasscodes
     * @return $this
     */
    public function setNumberOfPreviousPasscodes($numberOfPreviousPasscodes)
    {
        $this->numberOfPreviousPasscodes = $numberOfPreviousPasscodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfPreviousPasscodes()
    {
        $this->numberOfPreviousPasscodes = null;
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


}

