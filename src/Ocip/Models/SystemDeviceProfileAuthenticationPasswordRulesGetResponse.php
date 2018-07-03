<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceProfileAuthenticationPasswordRulesGetResponse
 *
 * Response to SystemDeviceProfileAuthenticationPasswordRulesGetRequest.
 *         Contains the device profile authentication password rules for the
 * system.
 *
 * @see SystemDeviceProfileAuthenticationPasswordRulesGetRequest
 */
class SystemDeviceProfileAuthenticationPasswordRulesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName disallowAuthenticationName
     * @var bool|null
     */
    private $disallowAuthenticationName = null;

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
     * @ElementName sendPermanentLockoutNotification
     * @var bool|null
     */
    private $sendPermanentLockoutNotification = null;

    /**
     * @ElementName permanentLockoutNotifyEmailAddress
     * @var string|null
     */
    private $permanentLockoutNotifyEmailAddress = null;

    /**
     * @ElementName deviceProfileAuthenticationLockoutType
     * @var string|null
     */
    private $deviceProfileAuthenticationLockoutType = null;

    /**
     * @ElementName deviceProfileTemporaryLockoutThreshold
     * @var int|null
     */
    private $deviceProfileTemporaryLockoutThreshold = null;

    /**
     * @ElementName deviceProfileWaitAlgorithm
     * @var string|null
     */
    private $deviceProfileWaitAlgorithm = null;

    /**
     * @ElementName deviceProfileLockoutFixedMinutes
     * @var string|null
     */
    private $deviceProfileLockoutFixedMinutes = null;

    /**
     * @ElementName deviceProfilePermanentLockoutThreshold
     * @var int|null
     */
    private $deviceProfilePermanentLockoutThreshold = null;

    /**
     * Getter for disallowAuthenticationName
     *
     * @ElementName disallowAuthenticationName
     * @return bool|null
     */
    public function getDisallowAuthenticationName()
    {
        return $this->disallowAuthenticationName;
    }

    /**
     * Setter for disallowAuthenticationName
     *
     * @ElementName disallowAuthenticationName
     * @param bool|null $disallowAuthenticationName
     * @return $this
     */
    public function setDisallowAuthenticationName($disallowAuthenticationName)
    {
        $this->disallowAuthenticationName = $disallowAuthenticationName;
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
     * Getter for sendPermanentLockoutNotification
     *
     * @ElementName sendPermanentLockoutNotification
     * @return bool|null
     */
    public function getSendPermanentLockoutNotification()
    {
        return $this->sendPermanentLockoutNotification;
    }

    /**
     * Setter for sendPermanentLockoutNotification
     *
     * @ElementName sendPermanentLockoutNotification
     * @param bool|null $sendPermanentLockoutNotification
     * @return $this
     */
    public function setSendPermanentLockoutNotification($sendPermanentLockoutNotification)
    {
        $this->sendPermanentLockoutNotification = $sendPermanentLockoutNotification;
        return $this;
    }

    /**
     * Getter for permanentLockoutNotifyEmailAddress
     *
     * @ElementName permanentLockoutNotifyEmailAddress
     * @return string|null
     */
    public function getPermanentLockoutNotifyEmailAddress()
    {
        return $this->permanentLockoutNotifyEmailAddress;
    }

    /**
     * Setter for permanentLockoutNotifyEmailAddress
     *
     * @ElementName permanentLockoutNotifyEmailAddress
     * @param string|null $permanentLockoutNotifyEmailAddress
     * @return $this
     */
    public function setPermanentLockoutNotifyEmailAddress($permanentLockoutNotifyEmailAddress)
    {
        $this->permanentLockoutNotifyEmailAddress = $permanentLockoutNotifyEmailAddress;
        return $this;
    }

    /**
     * Getter for deviceProfileAuthenticationLockoutType
     *
     * @ElementName deviceProfileAuthenticationLockoutType
     * @return string|null
     */
    public function getDeviceProfileAuthenticationLockoutType()
    {
        return $this->deviceProfileAuthenticationLockoutType;
    }

    /**
     * Setter for deviceProfileAuthenticationLockoutType
     *
     * @ElementName deviceProfileAuthenticationLockoutType
     * @param string|null $deviceProfileAuthenticationLockoutType
     * @return $this
     */
    public function setDeviceProfileAuthenticationLockoutType($deviceProfileAuthenticationLockoutType)
    {
        $this->deviceProfileAuthenticationLockoutType = $deviceProfileAuthenticationLockoutType;
        return $this;
    }

    /**
     * Getter for deviceProfileTemporaryLockoutThreshold
     *
     * @ElementName deviceProfileTemporaryLockoutThreshold
     * @return int|null
     */
    public function getDeviceProfileTemporaryLockoutThreshold()
    {
        return $this->deviceProfileTemporaryLockoutThreshold;
    }

    /**
     * Setter for deviceProfileTemporaryLockoutThreshold
     *
     * @ElementName deviceProfileTemporaryLockoutThreshold
     * @param int|null $deviceProfileTemporaryLockoutThreshold
     * @return $this
     */
    public function setDeviceProfileTemporaryLockoutThreshold($deviceProfileTemporaryLockoutThreshold)
    {
        $this->deviceProfileTemporaryLockoutThreshold = $deviceProfileTemporaryLockoutThreshold;
        return $this;
    }

    /**
     * Getter for deviceProfileWaitAlgorithm
     *
     * @ElementName deviceProfileWaitAlgorithm
     * @return string|null
     */
    public function getDeviceProfileWaitAlgorithm()
    {
        return $this->deviceProfileWaitAlgorithm;
    }

    /**
     * Setter for deviceProfileWaitAlgorithm
     *
     * @ElementName deviceProfileWaitAlgorithm
     * @param string|null $deviceProfileWaitAlgorithm
     * @return $this
     */
    public function setDeviceProfileWaitAlgorithm($deviceProfileWaitAlgorithm)
    {
        $this->deviceProfileWaitAlgorithm = $deviceProfileWaitAlgorithm;
        return $this;
    }

    /**
     * Getter for deviceProfileLockoutFixedMinutes
     *
     * @ElementName deviceProfileLockoutFixedMinutes
     * @return string|null
     */
    public function getDeviceProfileLockoutFixedMinutes()
    {
        return $this->deviceProfileLockoutFixedMinutes;
    }

    /**
     * Setter for deviceProfileLockoutFixedMinutes
     *
     * @ElementName deviceProfileLockoutFixedMinutes
     * @param string|null $deviceProfileLockoutFixedMinutes
     * @return $this
     */
    public function setDeviceProfileLockoutFixedMinutes($deviceProfileLockoutFixedMinutes)
    {
        $this->deviceProfileLockoutFixedMinutes = $deviceProfileLockoutFixedMinutes;
        return $this;
    }

    /**
     * Getter for deviceProfilePermanentLockoutThreshold
     *
     * @ElementName deviceProfilePermanentLockoutThreshold
     * @return int|null
     */
    public function getDeviceProfilePermanentLockoutThreshold()
    {
        return $this->deviceProfilePermanentLockoutThreshold;
    }

    /**
     * Setter for deviceProfilePermanentLockoutThreshold
     *
     * @ElementName deviceProfilePermanentLockoutThreshold
     * @param int|null $deviceProfilePermanentLockoutThreshold
     * @return $this
     */
    public function setDeviceProfilePermanentLockoutThreshold($deviceProfilePermanentLockoutThreshold)
    {
        $this->deviceProfilePermanentLockoutThreshold = $deviceProfilePermanentLockoutThreshold;
        return $this;
    }


}

