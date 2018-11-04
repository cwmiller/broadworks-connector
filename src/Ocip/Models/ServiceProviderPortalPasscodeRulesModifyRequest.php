<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPortalPasscodeRulesModifyRequest
 *
 * Request to modify the service provider's passcode rules setting.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           numberOfRepeatedDigits
 *           disallowRepeatedPatterns
 *           disallowContiguousSequences
 *           numberOfAscendingDigits
 *           numberOfDescendingDigits
 *           numberOfPreviousPasscodes
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderPortalPasscodeRulesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName disallowRepeatedDigits
     * @var bool|null
     */
    private $disallowRepeatedDigits = null;

    /**
     * @ElementName numberOfRepeatedDigits
     * @var int|null
     */
    private $numberOfRepeatedDigits = null;

    /**
     * @ElementName disallowRepeatedPatterns
     * @var bool|null
     */
    private $disallowRepeatedPatterns = null;

    /**
     * @ElementName disallowContiguousSequences
     * @var bool|null
     */
    private $disallowContiguousSequences = null;

    /**
     * @ElementName numberOfAscendingDigits
     * @var int|null
     */
    private $numberOfAscendingDigits = null;

    /**
     * @ElementName numberOfDescendingDigits
     * @var int|null
     */
    private $numberOfDescendingDigits = null;

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
     * @ElementName numberOfPreviousPasscodes
     * @var int|null
     */
    private $numberOfPreviousPasscodes = null;

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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $loginDisabledNotifyEmailAddress = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
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
     * Getter for numberOfRepeatedDigits
     *
     * @ElementName numberOfRepeatedDigits
     * @return int|null
     */
    public function getNumberOfRepeatedDigits()
    {
        return $this->numberOfRepeatedDigits;
    }

    /**
     * Setter for numberOfRepeatedDigits
     *
     * @ElementName numberOfRepeatedDigits
     * @param int|null $numberOfRepeatedDigits
     * @return $this
     */
    public function setNumberOfRepeatedDigits($numberOfRepeatedDigits)
    {
        $this->numberOfRepeatedDigits = $numberOfRepeatedDigits;
        return $this;
    }

    /**
     * Getter for disallowRepeatedPatterns
     *
     * @ElementName disallowRepeatedPatterns
     * @return bool|null
     */
    public function getDisallowRepeatedPatterns()
    {
        return $this->disallowRepeatedPatterns;
    }

    /**
     * Setter for disallowRepeatedPatterns
     *
     * @ElementName disallowRepeatedPatterns
     * @param bool|null $disallowRepeatedPatterns
     * @return $this
     */
    public function setDisallowRepeatedPatterns($disallowRepeatedPatterns)
    {
        $this->disallowRepeatedPatterns = $disallowRepeatedPatterns;
        return $this;
    }

    /**
     * Getter for disallowContiguousSequences
     *
     * @ElementName disallowContiguousSequences
     * @return bool|null
     */
    public function getDisallowContiguousSequences()
    {
        return $this->disallowContiguousSequences;
    }

    /**
     * Setter for disallowContiguousSequences
     *
     * @ElementName disallowContiguousSequences
     * @param bool|null $disallowContiguousSequences
     * @return $this
     */
    public function setDisallowContiguousSequences($disallowContiguousSequences)
    {
        $this->disallowContiguousSequences = $disallowContiguousSequences;
        return $this;
    }

    /**
     * Getter for numberOfAscendingDigits
     *
     * @ElementName numberOfAscendingDigits
     * @return int|null
     */
    public function getNumberOfAscendingDigits()
    {
        return $this->numberOfAscendingDigits;
    }

    /**
     * Setter for numberOfAscendingDigits
     *
     * @ElementName numberOfAscendingDigits
     * @param int|null $numberOfAscendingDigits
     * @return $this
     */
    public function setNumberOfAscendingDigits($numberOfAscendingDigits)
    {
        $this->numberOfAscendingDigits = $numberOfAscendingDigits;
        return $this;
    }

    /**
     * Getter for numberOfDescendingDigits
     *
     * @ElementName numberOfDescendingDigits
     * @return int|null
     */
    public function getNumberOfDescendingDigits()
    {
        return $this->numberOfDescendingDigits;
    }

    /**
     * Setter for numberOfDescendingDigits
     *
     * @ElementName numberOfDescendingDigits
     * @param int|null $numberOfDescendingDigits
     * @return $this
     */
    public function setNumberOfDescendingDigits($numberOfDescendingDigits)
    {
        $this->numberOfDescendingDigits = $numberOfDescendingDigits;
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
     * Getter for numberOfPreviousPasscodes
     *
     * @ElementName numberOfPreviousPasscodes
     * @return int|null
     */
    public function getNumberOfPreviousPasscodes()
    {
        return $this->numberOfPreviousPasscodes;
    }

    /**
     * Setter for numberOfPreviousPasscodes
     *
     * @ElementName numberOfPreviousPasscodes
     * @param int|null $numberOfPreviousPasscodes
     * @return $this
     */
    public function setNumberOfPreviousPasscodes($numberOfPreviousPasscodes)
    {
        $this->numberOfPreviousPasscodes = $numberOfPreviousPasscodes;
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return $this->loginDisabledNotifyEmailAddress;
    }

    /**
     * Setter for loginDisabledNotifyEmailAddress
     *
     * @ElementName loginDisabledNotifyEmailAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $loginDisabledNotifyEmailAddress
     * @return $this
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress)
    {
        $this->loginDisabledNotifyEmailAddress = $loginDisabledNotifyEmailAddress;
        return $this;
    }


}

