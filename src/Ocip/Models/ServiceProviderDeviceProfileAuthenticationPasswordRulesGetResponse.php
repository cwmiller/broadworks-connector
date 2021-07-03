<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceProfileAuthenticationPasswordRulesGetResponse
 *
 * Response to ServiceProviderDeviceProfileAuthenticationPasswordRulesGetRequest.
 *         Contains the device profile authentication password rules for the service provider.
 *
 * @see ServiceProviderDeviceProfileAuthenticationPasswordRulesGetRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3039","type":"sequence"}]
 */
class ServiceProviderDeviceProfileAuthenticationPasswordRulesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useServiceProviderSettings
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $useServiceProviderSettings = null;

    /**
     * @ElementName disallowAuthenticationName
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $disallowAuthenticationName = null;

    /**
     * @ElementName disallowOldPassword
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $disallowOldPassword = null;

    /**
     * @ElementName disallowReversedOldPassword
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $disallowReversedOldPassword = null;

    /**
     * @ElementName restrictMinDigits
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $restrictMinDigits = null;

    /**
     * @ElementName minDigits
     * @Type int
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $minDigits = null;

    /**
     * @ElementName restrictMinUpperCaseLetters
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $restrictMinUpperCaseLetters = null;

    /**
     * @ElementName minUpperCaseLetters
     * @Type int
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $minUpperCaseLetters = null;

    /**
     * @ElementName restrictMinLowerCaseLetters
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $restrictMinLowerCaseLetters = null;

    /**
     * @ElementName minLowerCaseLetters
     * @Type int
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $minLowerCaseLetters = null;

    /**
     * @ElementName restrictMinNonAlphanumericCharacters
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $restrictMinNonAlphanumericCharacters = null;

    /**
     * @ElementName minNonAlphanumericCharacters
     * @Type int
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $minNonAlphanumericCharacters = null;

    /**
     * @ElementName minLength
     * @Type int
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @MinInclusive 3
     * @MaxInclusive 40
     * @var int|null
     */
    private $minLength = null;

    /**
     * @ElementName sendPermanentLockoutNotification
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var bool|null
     */
    private $sendPermanentLockoutNotification = null;

    /**
     * @ElementName permanentLockoutNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $permanentLockoutNotifyEmailAddress = null;

    /**
     * @ElementName deviceProfileAuthenticationLockoutType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null
     */
    private $deviceProfileAuthenticationLockoutType = null;

    /**
     * @ElementName deviceProfileTemporaryLockoutThreshold
     * @Type int
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $deviceProfileTemporaryLockoutThreshold = null;

    /**
     * @ElementName deviceProfileWaitAlgorithm
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null
     */
    private $deviceProfileWaitAlgorithm = null;

    /**
     * @ElementName deviceProfileLockoutFixedMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null
     */
    private $deviceProfileLockoutFixedMinutes = null;

    /**
     * @ElementName deviceProfilePermanentLockoutThreshold
     * @Type int
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3039
     * @MinInclusive 2
     * @MaxInclusive 10
     * @var int|null
     */
    private $deviceProfilePermanentLockoutThreshold = null;

    /**
     * Getter for useServiceProviderSettings
     *
     * @return bool
     */
    public function getUseServiceProviderSettings()
    {
        return $this->useServiceProviderSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderSettings;
    }

    /**
     * Setter for useServiceProviderSettings
     *
     * @param bool $useServiceProviderSettings
     * @return $this
     */
    public function setUseServiceProviderSettings($useServiceProviderSettings)
    {
        $this->useServiceProviderSettings = $useServiceProviderSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderSettings()
    {
        $this->useServiceProviderSettings = null;
        return $this;
    }

    /**
     * Getter for disallowAuthenticationName
     *
     * @return bool
     */
    public function getDisallowAuthenticationName()
    {
        return $this->disallowAuthenticationName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowAuthenticationName;
    }

    /**
     * Setter for disallowAuthenticationName
     *
     * @param bool $disallowAuthenticationName
     * @return $this
     */
    public function setDisallowAuthenticationName($disallowAuthenticationName)
    {
        $this->disallowAuthenticationName = $disallowAuthenticationName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowAuthenticationName()
    {
        $this->disallowAuthenticationName = null;
        return $this;
    }

    /**
     * Getter for disallowOldPassword
     *
     * @return bool
     */
    public function getDisallowOldPassword()
    {
        return $this->disallowOldPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowOldPassword;
    }

    /**
     * Setter for disallowOldPassword
     *
     * @param bool $disallowOldPassword
     * @return $this
     */
    public function setDisallowOldPassword($disallowOldPassword)
    {
        $this->disallowOldPassword = $disallowOldPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowOldPassword()
    {
        $this->disallowOldPassword = null;
        return $this;
    }

    /**
     * Getter for disallowReversedOldPassword
     *
     * @return bool
     */
    public function getDisallowReversedOldPassword()
    {
        return $this->disallowReversedOldPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowReversedOldPassword;
    }

    /**
     * Setter for disallowReversedOldPassword
     *
     * @param bool $disallowReversedOldPassword
     * @return $this
     */
    public function setDisallowReversedOldPassword($disallowReversedOldPassword)
    {
        $this->disallowReversedOldPassword = $disallowReversedOldPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowReversedOldPassword()
    {
        $this->disallowReversedOldPassword = null;
        return $this;
    }

    /**
     * Getter for restrictMinDigits
     *
     * @return bool
     */
    public function getRestrictMinDigits()
    {
        return $this->restrictMinDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMinDigits;
    }

    /**
     * Setter for restrictMinDigits
     *
     * @param bool $restrictMinDigits
     * @return $this
     */
    public function setRestrictMinDigits($restrictMinDigits)
    {
        $this->restrictMinDigits = $restrictMinDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMinDigits()
    {
        $this->restrictMinDigits = null;
        return $this;
    }

    /**
     * Getter for minDigits
     *
     * @return int
     */
    public function getMinDigits()
    {
        return $this->minDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minDigits;
    }

    /**
     * Setter for minDigits
     *
     * @param int $minDigits
     * @return $this
     */
    public function setMinDigits($minDigits)
    {
        $this->minDigits = $minDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinDigits()
    {
        $this->minDigits = null;
        return $this;
    }

    /**
     * Getter for restrictMinUpperCaseLetters
     *
     * @return bool
     */
    public function getRestrictMinUpperCaseLetters()
    {
        return $this->restrictMinUpperCaseLetters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMinUpperCaseLetters;
    }

    /**
     * Setter for restrictMinUpperCaseLetters
     *
     * @param bool $restrictMinUpperCaseLetters
     * @return $this
     */
    public function setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters)
    {
        $this->restrictMinUpperCaseLetters = $restrictMinUpperCaseLetters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMinUpperCaseLetters()
    {
        $this->restrictMinUpperCaseLetters = null;
        return $this;
    }

    /**
     * Getter for minUpperCaseLetters
     *
     * @return int
     */
    public function getMinUpperCaseLetters()
    {
        return $this->minUpperCaseLetters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minUpperCaseLetters;
    }

    /**
     * Setter for minUpperCaseLetters
     *
     * @param int $minUpperCaseLetters
     * @return $this
     */
    public function setMinUpperCaseLetters($minUpperCaseLetters)
    {
        $this->minUpperCaseLetters = $minUpperCaseLetters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinUpperCaseLetters()
    {
        $this->minUpperCaseLetters = null;
        return $this;
    }

    /**
     * Getter for restrictMinLowerCaseLetters
     *
     * @return bool
     */
    public function getRestrictMinLowerCaseLetters()
    {
        return $this->restrictMinLowerCaseLetters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMinLowerCaseLetters;
    }

    /**
     * Setter for restrictMinLowerCaseLetters
     *
     * @param bool $restrictMinLowerCaseLetters
     * @return $this
     */
    public function setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters)
    {
        $this->restrictMinLowerCaseLetters = $restrictMinLowerCaseLetters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMinLowerCaseLetters()
    {
        $this->restrictMinLowerCaseLetters = null;
        return $this;
    }

    /**
     * Getter for minLowerCaseLetters
     *
     * @return int
     */
    public function getMinLowerCaseLetters()
    {
        return $this->minLowerCaseLetters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minLowerCaseLetters;
    }

    /**
     * Setter for minLowerCaseLetters
     *
     * @param int $minLowerCaseLetters
     * @return $this
     */
    public function setMinLowerCaseLetters($minLowerCaseLetters)
    {
        $this->minLowerCaseLetters = $minLowerCaseLetters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinLowerCaseLetters()
    {
        $this->minLowerCaseLetters = null;
        return $this;
    }

    /**
     * Getter for restrictMinNonAlphanumericCharacters
     *
     * @return bool
     */
    public function getRestrictMinNonAlphanumericCharacters()
    {
        return $this->restrictMinNonAlphanumericCharacters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMinNonAlphanumericCharacters;
    }

    /**
     * Setter for restrictMinNonAlphanumericCharacters
     *
     * @param bool $restrictMinNonAlphanumericCharacters
     * @return $this
     */
    public function setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters)
    {
        $this->restrictMinNonAlphanumericCharacters = $restrictMinNonAlphanumericCharacters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMinNonAlphanumericCharacters()
    {
        $this->restrictMinNonAlphanumericCharacters = null;
        return $this;
    }

    /**
     * Getter for minNonAlphanumericCharacters
     *
     * @return int
     */
    public function getMinNonAlphanumericCharacters()
    {
        return $this->minNonAlphanumericCharacters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minNonAlphanumericCharacters;
    }

    /**
     * Setter for minNonAlphanumericCharacters
     *
     * @param int $minNonAlphanumericCharacters
     * @return $this
     */
    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters)
    {
        $this->minNonAlphanumericCharacters = $minNonAlphanumericCharacters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinNonAlphanumericCharacters()
    {
        $this->minNonAlphanumericCharacters = null;
        return $this;
    }

    /**
     * Getter for minLength
     *
     * @return int
     */
    public function getMinLength()
    {
        return $this->minLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minLength;
    }

    /**
     * Setter for minLength
     *
     * @param int $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->minLength = $minLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinLength()
    {
        $this->minLength = null;
        return $this;
    }

    /**
     * Getter for sendPermanentLockoutNotification
     *
     * @return bool
     */
    public function getSendPermanentLockoutNotification()
    {
        return $this->sendPermanentLockoutNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendPermanentLockoutNotification;
    }

    /**
     * Setter for sendPermanentLockoutNotification
     *
     * @param bool $sendPermanentLockoutNotification
     * @return $this
     */
    public function setSendPermanentLockoutNotification($sendPermanentLockoutNotification)
    {
        $this->sendPermanentLockoutNotification = $sendPermanentLockoutNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendPermanentLockoutNotification()
    {
        $this->sendPermanentLockoutNotification = null;
        return $this;
    }

    /**
     * Getter for permanentLockoutNotifyEmailAddress
     *
     * @return string
     */
    public function getPermanentLockoutNotifyEmailAddress()
    {
        return $this->permanentLockoutNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permanentLockoutNotifyEmailAddress;
    }

    /**
     * Setter for permanentLockoutNotifyEmailAddress
     *
     * @param string $permanentLockoutNotifyEmailAddress
     * @return $this
     */
    public function setPermanentLockoutNotifyEmailAddress($permanentLockoutNotifyEmailAddress)
    {
        $this->permanentLockoutNotifyEmailAddress = $permanentLockoutNotifyEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPermanentLockoutNotifyEmailAddress()
    {
        $this->permanentLockoutNotifyEmailAddress = null;
        return $this;
    }

    /**
     * Getter for deviceProfileAuthenticationLockoutType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType
     */
    public function getDeviceProfileAuthenticationLockoutType()
    {
        return $this->deviceProfileAuthenticationLockoutType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceProfileAuthenticationLockoutType;
    }

    /**
     * Setter for deviceProfileAuthenticationLockoutType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType $deviceProfileAuthenticationLockoutType
     * @return $this
     */
    public function setDeviceProfileAuthenticationLockoutType(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType $deviceProfileAuthenticationLockoutType)
    {
        $this->deviceProfileAuthenticationLockoutType = $deviceProfileAuthenticationLockoutType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceProfileAuthenticationLockoutType()
    {
        $this->deviceProfileAuthenticationLockoutType = null;
        return $this;
    }

    /**
     * Getter for deviceProfileTemporaryLockoutThreshold
     *
     * @return int
     */
    public function getDeviceProfileTemporaryLockoutThreshold()
    {
        return $this->deviceProfileTemporaryLockoutThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceProfileTemporaryLockoutThreshold;
    }

    /**
     * Setter for deviceProfileTemporaryLockoutThreshold
     *
     * @param int $deviceProfileTemporaryLockoutThreshold
     * @return $this
     */
    public function setDeviceProfileTemporaryLockoutThreshold($deviceProfileTemporaryLockoutThreshold)
    {
        $this->deviceProfileTemporaryLockoutThreshold = $deviceProfileTemporaryLockoutThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceProfileTemporaryLockoutThreshold()
    {
        $this->deviceProfileTemporaryLockoutThreshold = null;
        return $this;
    }

    /**
     * Getter for deviceProfileWaitAlgorithm
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType
     */
    public function getDeviceProfileWaitAlgorithm()
    {
        return $this->deviceProfileWaitAlgorithm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceProfileWaitAlgorithm;
    }

    /**
     * Setter for deviceProfileWaitAlgorithm
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType $deviceProfileWaitAlgorithm
     * @return $this
     */
    public function setDeviceProfileWaitAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType $deviceProfileWaitAlgorithm)
    {
        $this->deviceProfileWaitAlgorithm = $deviceProfileWaitAlgorithm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceProfileWaitAlgorithm()
    {
        $this->deviceProfileWaitAlgorithm = null;
        return $this;
    }

    /**
     * Getter for deviceProfileLockoutFixedMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes
     */
    public function getDeviceProfileLockoutFixedMinutes()
    {
        return $this->deviceProfileLockoutFixedMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceProfileLockoutFixedMinutes;
    }

    /**
     * Setter for deviceProfileLockoutFixedMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes $deviceProfileLockoutFixedMinutes
     * @return $this
     */
    public function setDeviceProfileLockoutFixedMinutes(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes $deviceProfileLockoutFixedMinutes)
    {
        $this->deviceProfileLockoutFixedMinutes = $deviceProfileLockoutFixedMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceProfileLockoutFixedMinutes()
    {
        $this->deviceProfileLockoutFixedMinutes = null;
        return $this;
    }

    /**
     * Getter for deviceProfilePermanentLockoutThreshold
     *
     * @return int
     */
    public function getDeviceProfilePermanentLockoutThreshold()
    {
        return $this->deviceProfilePermanentLockoutThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceProfilePermanentLockoutThreshold;
    }

    /**
     * Setter for deviceProfilePermanentLockoutThreshold
     *
     * @param int $deviceProfilePermanentLockoutThreshold
     * @return $this
     */
    public function setDeviceProfilePermanentLockoutThreshold($deviceProfilePermanentLockoutThreshold)
    {
        $this->deviceProfilePermanentLockoutThreshold = $deviceProfilePermanentLockoutThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceProfilePermanentLockoutThreshold()
    {
        $this->deviceProfilePermanentLockoutThreshold = null;
        return $this;
    }


}

