<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordRulesGetResponse16
 *
 * Response to SystemPasswordRulesGetRequest16.
 *         Contains the password rules for System administrator, Provisioning
 * Administrator,
 *         and/or Service Provider Administrator, Group Administrator, Department
 * Administrator, user.
 */
class SystemPasswordRulesGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName rulesApplyTo
     * @var string|null
     */
    private $rulesApplyTo = null;

    /**
     * @ElementName allowWebAddExternalAuthenticationUsers
     * @var bool|null
     */
    private $allowWebAddExternalAuthenticationUsers = null;

    /**
     * @ElementName disallowUserId
     * @var bool|null
     */
    private $disallowUserId = null;

    /**
     * @ElementName disallowOldPassword
     * @var bool|null
     */
    private $disallowOldPassword = null;

    /**
     * @ElementName disallowReversedOldPassword
     * @var bool|null
     */
    private $disallowReversedOldPassword = null;

    /**
     * @ElementName restrictMinDigits
     * @var bool|null
     */
    private $restrictMinDigits = null;

    /**
     * @ElementName minDigits
     * @var int|null
     */
    private $minDigits = null;

    /**
     * @ElementName restrictMinUpperCaseLetters
     * @var bool|null
     */
    private $restrictMinUpperCaseLetters = null;

    /**
     * @ElementName minUpperCaseLetters
     * @var int|null
     */
    private $minUpperCaseLetters = null;

    /**
     * @ElementName restrictMinLowerCaseLetters
     * @var bool|null
     */
    private $restrictMinLowerCaseLetters = null;

    /**
     * @ElementName minLowerCaseLetters
     * @var int|null
     */
    private $minLowerCaseLetters = null;

    /**
     * @ElementName restrictMinNonAlphanumericCharacters
     * @var bool|null
     */
    private $restrictMinNonAlphanumericCharacters = null;

    /**
     * @ElementName minNonAlphanumericCharacters
     * @var int|null
     */
    private $minNonAlphanumericCharacters = null;

    /**
     * @ElementName minLength
     * @var int|null
     */
    private $minLength = null;

    /**
     * @ElementName maxFailedLoginAttempts
     * @var int|null
     */
    private $maxFailedLoginAttempts = null;

    /**
     * @ElementName passwordExpiresDays
     * @var int|null
     */
    private $passwordExpiresDays = null;

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
     * @ElementName disallowRulesModification
     * @var bool|null
     */
    private $disallowRulesModification = null;

    /**
     * @ElementName disallowPreviousPasswords
     * @var bool|null
     */
    private $disallowPreviousPasswords = null;

    /**
     * @ElementName numberOfPreviousPasswords
     * @var int|null
     */
    private $numberOfPreviousPasswords = null;

    /**
     * Getter for rulesApplyTo
     *
     * @ElementName rulesApplyTo
     * @return string|null
     */
    public function getRulesApplyTo()
    {
        return $this->rulesApplyTo;
    }

    /**
     * Setter for rulesApplyTo
     *
     * @ElementName rulesApplyTo
     * @param string|null $rulesApplyTo
     * @return $this
     */
    public function setRulesApplyTo($rulesApplyTo)
    {
        $this->rulesApplyTo = $rulesApplyTo;
        return $this;
    }

    /**
     * Getter for allowWebAddExternalAuthenticationUsers
     *
     * @ElementName allowWebAddExternalAuthenticationUsers
     * @return bool|null
     */
    public function getAllowWebAddExternalAuthenticationUsers()
    {
        return $this->allowWebAddExternalAuthenticationUsers;
    }

    /**
     * Setter for allowWebAddExternalAuthenticationUsers
     *
     * @ElementName allowWebAddExternalAuthenticationUsers
     * @param bool|null $allowWebAddExternalAuthenticationUsers
     * @return $this
     */
    public function setAllowWebAddExternalAuthenticationUsers($allowWebAddExternalAuthenticationUsers)
    {
        $this->allowWebAddExternalAuthenticationUsers = $allowWebAddExternalAuthenticationUsers;
        return $this;
    }

    /**
     * Getter for disallowUserId
     *
     * @ElementName disallowUserId
     * @return bool|null
     */
    public function getDisallowUserId()
    {
        return $this->disallowUserId;
    }

    /**
     * Setter for disallowUserId
     *
     * @ElementName disallowUserId
     * @param bool|null $disallowUserId
     * @return $this
     */
    public function setDisallowUserId($disallowUserId)
    {
        $this->disallowUserId = $disallowUserId;
        return $this;
    }

    /**
     * Getter for disallowOldPassword
     *
     * @ElementName disallowOldPassword
     * @return bool|null
     */
    public function getDisallowOldPassword()
    {
        return $this->disallowOldPassword;
    }

    /**
     * Setter for disallowOldPassword
     *
     * @ElementName disallowOldPassword
     * @param bool|null $disallowOldPassword
     * @return $this
     */
    public function setDisallowOldPassword($disallowOldPassword)
    {
        $this->disallowOldPassword = $disallowOldPassword;
        return $this;
    }

    /**
     * Getter for disallowReversedOldPassword
     *
     * @ElementName disallowReversedOldPassword
     * @return bool|null
     */
    public function getDisallowReversedOldPassword()
    {
        return $this->disallowReversedOldPassword;
    }

    /**
     * Setter for disallowReversedOldPassword
     *
     * @ElementName disallowReversedOldPassword
     * @param bool|null $disallowReversedOldPassword
     * @return $this
     */
    public function setDisallowReversedOldPassword($disallowReversedOldPassword)
    {
        $this->disallowReversedOldPassword = $disallowReversedOldPassword;
        return $this;
    }

    /**
     * Getter for restrictMinDigits
     *
     * @ElementName restrictMinDigits
     * @return bool|null
     */
    public function getRestrictMinDigits()
    {
        return $this->restrictMinDigits;
    }

    /**
     * Setter for restrictMinDigits
     *
     * @ElementName restrictMinDigits
     * @param bool|null $restrictMinDigits
     * @return $this
     */
    public function setRestrictMinDigits($restrictMinDigits)
    {
        $this->restrictMinDigits = $restrictMinDigits;
        return $this;
    }

    /**
     * Getter for minDigits
     *
     * @ElementName minDigits
     * @return int|null
     */
    public function getMinDigits()
    {
        return $this->minDigits;
    }

    /**
     * Setter for minDigits
     *
     * @ElementName minDigits
     * @param int|null $minDigits
     * @return $this
     */
    public function setMinDigits($minDigits)
    {
        $this->minDigits = $minDigits;
        return $this;
    }

    /**
     * Getter for restrictMinUpperCaseLetters
     *
     * @ElementName restrictMinUpperCaseLetters
     * @return bool|null
     */
    public function getRestrictMinUpperCaseLetters()
    {
        return $this->restrictMinUpperCaseLetters;
    }

    /**
     * Setter for restrictMinUpperCaseLetters
     *
     * @ElementName restrictMinUpperCaseLetters
     * @param bool|null $restrictMinUpperCaseLetters
     * @return $this
     */
    public function setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters)
    {
        $this->restrictMinUpperCaseLetters = $restrictMinUpperCaseLetters;
        return $this;
    }

    /**
     * Getter for minUpperCaseLetters
     *
     * @ElementName minUpperCaseLetters
     * @return int|null
     */
    public function getMinUpperCaseLetters()
    {
        return $this->minUpperCaseLetters;
    }

    /**
     * Setter for minUpperCaseLetters
     *
     * @ElementName minUpperCaseLetters
     * @param int|null $minUpperCaseLetters
     * @return $this
     */
    public function setMinUpperCaseLetters($minUpperCaseLetters)
    {
        $this->minUpperCaseLetters = $minUpperCaseLetters;
        return $this;
    }

    /**
     * Getter for restrictMinLowerCaseLetters
     *
     * @ElementName restrictMinLowerCaseLetters
     * @return bool|null
     */
    public function getRestrictMinLowerCaseLetters()
    {
        return $this->restrictMinLowerCaseLetters;
    }

    /**
     * Setter for restrictMinLowerCaseLetters
     *
     * @ElementName restrictMinLowerCaseLetters
     * @param bool|null $restrictMinLowerCaseLetters
     * @return $this
     */
    public function setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters)
    {
        $this->restrictMinLowerCaseLetters = $restrictMinLowerCaseLetters;
        return $this;
    }

    /**
     * Getter for minLowerCaseLetters
     *
     * @ElementName minLowerCaseLetters
     * @return int|null
     */
    public function getMinLowerCaseLetters()
    {
        return $this->minLowerCaseLetters;
    }

    /**
     * Setter for minLowerCaseLetters
     *
     * @ElementName minLowerCaseLetters
     * @param int|null $minLowerCaseLetters
     * @return $this
     */
    public function setMinLowerCaseLetters($minLowerCaseLetters)
    {
        $this->minLowerCaseLetters = $minLowerCaseLetters;
        return $this;
    }

    /**
     * Getter for restrictMinNonAlphanumericCharacters
     *
     * @ElementName restrictMinNonAlphanumericCharacters
     * @return bool|null
     */
    public function getRestrictMinNonAlphanumericCharacters()
    {
        return $this->restrictMinNonAlphanumericCharacters;
    }

    /**
     * Setter for restrictMinNonAlphanumericCharacters
     *
     * @ElementName restrictMinNonAlphanumericCharacters
     * @param bool|null $restrictMinNonAlphanumericCharacters
     * @return $this
     */
    public function setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters)
    {
        $this->restrictMinNonAlphanumericCharacters = $restrictMinNonAlphanumericCharacters;
        return $this;
    }

    /**
     * Getter for minNonAlphanumericCharacters
     *
     * @ElementName minNonAlphanumericCharacters
     * @return int|null
     */
    public function getMinNonAlphanumericCharacters()
    {
        return $this->minNonAlphanumericCharacters;
    }

    /**
     * Setter for minNonAlphanumericCharacters
     *
     * @ElementName minNonAlphanumericCharacters
     * @param int|null $minNonAlphanumericCharacters
     * @return $this
     */
    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters)
    {
        $this->minNonAlphanumericCharacters = $minNonAlphanumericCharacters;
        return $this;
    }

    /**
     * Getter for minLength
     *
     * @ElementName minLength
     * @return int|null
     */
    public function getMinLength()
    {
        return $this->minLength;
    }

    /**
     * Setter for minLength
     *
     * @ElementName minLength
     * @param int|null $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->minLength = $minLength;
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
     * Getter for passwordExpiresDays
     *
     * @ElementName passwordExpiresDays
     * @return int|null
     */
    public function getPasswordExpiresDays()
    {
        return $this->passwordExpiresDays;
    }

    /**
     * Setter for passwordExpiresDays
     *
     * @ElementName passwordExpiresDays
     * @param int|null $passwordExpiresDays
     * @return $this
     */
    public function setPasswordExpiresDays($passwordExpiresDays)
    {
        $this->passwordExpiresDays = $passwordExpiresDays;
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

    /**
     * Getter for disallowRulesModification
     *
     * @ElementName disallowRulesModification
     * @return bool|null
     */
    public function getDisallowRulesModification()
    {
        return $this->disallowRulesModification;
    }

    /**
     * Setter for disallowRulesModification
     *
     * @ElementName disallowRulesModification
     * @param bool|null $disallowRulesModification
     * @return $this
     */
    public function setDisallowRulesModification($disallowRulesModification)
    {
        $this->disallowRulesModification = $disallowRulesModification;
        return $this;
    }

    /**
     * Getter for disallowPreviousPasswords
     *
     * @ElementName disallowPreviousPasswords
     * @return bool|null
     */
    public function getDisallowPreviousPasswords()
    {
        return $this->disallowPreviousPasswords;
    }

    /**
     * Setter for disallowPreviousPasswords
     *
     * @ElementName disallowPreviousPasswords
     * @param bool|null $disallowPreviousPasswords
     * @return $this
     */
    public function setDisallowPreviousPasswords($disallowPreviousPasswords)
    {
        $this->disallowPreviousPasswords = $disallowPreviousPasswords;
        return $this;
    }

    /**
     * Getter for numberOfPreviousPasswords
     *
     * @ElementName numberOfPreviousPasswords
     * @return int|null
     */
    public function getNumberOfPreviousPasswords()
    {
        return $this->numberOfPreviousPasswords;
    }

    /**
     * Setter for numberOfPreviousPasswords
     *
     * @ElementName numberOfPreviousPasswords
     * @param int|null $numberOfPreviousPasswords
     * @return $this
     */
    public function setNumberOfPreviousPasswords($numberOfPreviousPasswords)
    {
        $this->numberOfPreviousPasswords = $numberOfPreviousPasswords;
        return $this;
    }


}

