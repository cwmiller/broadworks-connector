<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationPasswordRulesModifyRequest
 *
 * Request to modify the system level SIP authentication password rule settings
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16877","type":"sequence"}]
 */
class SystemSIPAuthenticationPasswordRulesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName disallowAuthenticationName
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var bool|null
     */
    protected $disallowAuthenticationName = null;

    /**
     * @ElementName disallowOldPassword
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var bool|null
     */
    protected $disallowOldPassword = null;

    /**
     * @ElementName disallowReversedOldPassword
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var bool|null
     */
    protected $disallowReversedOldPassword = null;

    /**
     * @ElementName restrictMinDigits
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var bool|null
     */
    protected $restrictMinDigits = null;

    /**
     * @ElementName minDigits
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minDigits = null;

    /**
     * @ElementName restrictMinUpperCaseLetters
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var bool|null
     */
    protected $restrictMinUpperCaseLetters = null;

    /**
     * @ElementName minUpperCaseLetters
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minUpperCaseLetters = null;

    /**
     * @ElementName restrictMinLowerCaseLetters
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var bool|null
     */
    protected $restrictMinLowerCaseLetters = null;

    /**
     * @ElementName minLowerCaseLetters
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minLowerCaseLetters = null;

    /**
     * @ElementName restrictMinNonAlphanumericCharacters
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var bool|null
     */
    protected $restrictMinNonAlphanumericCharacters = null;

    /**
     * @ElementName minNonAlphanumericCharacters
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minNonAlphanumericCharacters = null;

    /**
     * @ElementName minLength
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 3
     * @MaxInclusive 40
     * @var int|null
     */
    protected $minLength = null;

    /**
     * @ElementName sendPermanentLockoutNotification
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var bool|null
     */
    protected $sendPermanentLockoutNotification = null;

    /**
     * @ElementName permanentLockoutNotifyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $permanentLockoutNotifyEmailAddress = null;

    /**
     * @ElementName endpointAuthenticationLockoutType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null
     */
    protected $endpointAuthenticationLockoutType = null;

    /**
     * @ElementName endpointTemporaryLockoutThreshold
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $endpointTemporaryLockoutThreshold = null;

    /**
     * @ElementName endpointWaitAlgorithm
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null
     */
    protected $endpointWaitAlgorithm = null;

    /**
     * @ElementName endpointLockoutFixedMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null
     */
    protected $endpointLockoutFixedMinutes = null;

    /**
     * @ElementName endpointPermanentLockoutThreshold
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 2
     * @MaxInclusive 10
     * @var int|null
     */
    protected $endpointPermanentLockoutThreshold = null;

    /**
     * @ElementName trunkGroupAuthenticationLockoutType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null
     */
    protected $trunkGroupAuthenticationLockoutType = null;

    /**
     * @ElementName trunkGroupTemporaryLockoutThreshold
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $trunkGroupTemporaryLockoutThreshold = null;

    /**
     * @ElementName trunkGroupWaitAlgorithm
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null
     */
    protected $trunkGroupWaitAlgorithm = null;

    /**
     * @ElementName trunkGroupLockoutFixedMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null
     */
    protected $trunkGroupLockoutFixedMinutes = null;

    /**
     * @ElementName trunkGroupPermanentLockoutThreshold
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16877
     * @MinInclusive 2
     * @MaxInclusive 10
     * @var int|null
     */
    protected $trunkGroupPermanentLockoutThreshold = null;

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
     * @return string|null
     */
    public function getPermanentLockoutNotifyEmailAddress()
    {
        return $this->permanentLockoutNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permanentLockoutNotifyEmailAddress;
    }

    /**
     * Setter for permanentLockoutNotifyEmailAddress
     *
     * @param string|null $permanentLockoutNotifyEmailAddress
     * @return $this
     */
    public function setPermanentLockoutNotifyEmailAddress($permanentLockoutNotifyEmailAddress = null)
    {
        if ($permanentLockoutNotifyEmailAddress === null) {
            $this->permanentLockoutNotifyEmailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->permanentLockoutNotifyEmailAddress = $permanentLockoutNotifyEmailAddress;
        }
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
     * Getter for endpointAuthenticationLockoutType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType
     */
    public function getEndpointAuthenticationLockoutType()
    {
        return $this->endpointAuthenticationLockoutType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointAuthenticationLockoutType;
    }

    /**
     * Setter for endpointAuthenticationLockoutType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType $endpointAuthenticationLockoutType
     * @return $this
     */
    public function setEndpointAuthenticationLockoutType(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType $endpointAuthenticationLockoutType)
    {
        $this->endpointAuthenticationLockoutType = $endpointAuthenticationLockoutType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointAuthenticationLockoutType()
    {
        $this->endpointAuthenticationLockoutType = null;
        return $this;
    }

    /**
     * Getter for endpointTemporaryLockoutThreshold
     *
     * @return int
     */
    public function getEndpointTemporaryLockoutThreshold()
    {
        return $this->endpointTemporaryLockoutThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointTemporaryLockoutThreshold;
    }

    /**
     * Setter for endpointTemporaryLockoutThreshold
     *
     * @param int $endpointTemporaryLockoutThreshold
     * @return $this
     */
    public function setEndpointTemporaryLockoutThreshold($endpointTemporaryLockoutThreshold)
    {
        $this->endpointTemporaryLockoutThreshold = $endpointTemporaryLockoutThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointTemporaryLockoutThreshold()
    {
        $this->endpointTemporaryLockoutThreshold = null;
        return $this;
    }

    /**
     * Getter for endpointWaitAlgorithm
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType
     */
    public function getEndpointWaitAlgorithm()
    {
        return $this->endpointWaitAlgorithm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointWaitAlgorithm;
    }

    /**
     * Setter for endpointWaitAlgorithm
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType $endpointWaitAlgorithm
     * @return $this
     */
    public function setEndpointWaitAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType $endpointWaitAlgorithm)
    {
        $this->endpointWaitAlgorithm = $endpointWaitAlgorithm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointWaitAlgorithm()
    {
        $this->endpointWaitAlgorithm = null;
        return $this;
    }

    /**
     * Getter for endpointLockoutFixedMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes
     */
    public function getEndpointLockoutFixedMinutes()
    {
        return $this->endpointLockoutFixedMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointLockoutFixedMinutes;
    }

    /**
     * Setter for endpointLockoutFixedMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes $endpointLockoutFixedMinutes
     * @return $this
     */
    public function setEndpointLockoutFixedMinutes(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes $endpointLockoutFixedMinutes)
    {
        $this->endpointLockoutFixedMinutes = $endpointLockoutFixedMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointLockoutFixedMinutes()
    {
        $this->endpointLockoutFixedMinutes = null;
        return $this;
    }

    /**
     * Getter for endpointPermanentLockoutThreshold
     *
     * @return int
     */
    public function getEndpointPermanentLockoutThreshold()
    {
        return $this->endpointPermanentLockoutThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointPermanentLockoutThreshold;
    }

    /**
     * Setter for endpointPermanentLockoutThreshold
     *
     * @param int $endpointPermanentLockoutThreshold
     * @return $this
     */
    public function setEndpointPermanentLockoutThreshold($endpointPermanentLockoutThreshold)
    {
        $this->endpointPermanentLockoutThreshold = $endpointPermanentLockoutThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointPermanentLockoutThreshold()
    {
        $this->endpointPermanentLockoutThreshold = null;
        return $this;
    }

    /**
     * Getter for trunkGroupAuthenticationLockoutType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType
     */
    public function getTrunkGroupAuthenticationLockoutType()
    {
        return $this->trunkGroupAuthenticationLockoutType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupAuthenticationLockoutType;
    }

    /**
     * Setter for trunkGroupAuthenticationLockoutType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType $trunkGroupAuthenticationLockoutType
     * @return $this
     */
    public function setTrunkGroupAuthenticationLockoutType(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType $trunkGroupAuthenticationLockoutType)
    {
        $this->trunkGroupAuthenticationLockoutType = $trunkGroupAuthenticationLockoutType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupAuthenticationLockoutType()
    {
        $this->trunkGroupAuthenticationLockoutType = null;
        return $this;
    }

    /**
     * Getter for trunkGroupTemporaryLockoutThreshold
     *
     * @return int
     */
    public function getTrunkGroupTemporaryLockoutThreshold()
    {
        return $this->trunkGroupTemporaryLockoutThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupTemporaryLockoutThreshold;
    }

    /**
     * Setter for trunkGroupTemporaryLockoutThreshold
     *
     * @param int $trunkGroupTemporaryLockoutThreshold
     * @return $this
     */
    public function setTrunkGroupTemporaryLockoutThreshold($trunkGroupTemporaryLockoutThreshold)
    {
        $this->trunkGroupTemporaryLockoutThreshold = $trunkGroupTemporaryLockoutThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupTemporaryLockoutThreshold()
    {
        $this->trunkGroupTemporaryLockoutThreshold = null;
        return $this;
    }

    /**
     * Getter for trunkGroupWaitAlgorithm
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType
     */
    public function getTrunkGroupWaitAlgorithm()
    {
        return $this->trunkGroupWaitAlgorithm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupWaitAlgorithm;
    }

    /**
     * Setter for trunkGroupWaitAlgorithm
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType $trunkGroupWaitAlgorithm
     * @return $this
     */
    public function setTrunkGroupWaitAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType $trunkGroupWaitAlgorithm)
    {
        $this->trunkGroupWaitAlgorithm = $trunkGroupWaitAlgorithm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupWaitAlgorithm()
    {
        $this->trunkGroupWaitAlgorithm = null;
        return $this;
    }

    /**
     * Getter for trunkGroupLockoutFixedMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes
     */
    public function getTrunkGroupLockoutFixedMinutes()
    {
        return $this->trunkGroupLockoutFixedMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupLockoutFixedMinutes;
    }

    /**
     * Setter for trunkGroupLockoutFixedMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes $trunkGroupLockoutFixedMinutes
     * @return $this
     */
    public function setTrunkGroupLockoutFixedMinutes(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes $trunkGroupLockoutFixedMinutes)
    {
        $this->trunkGroupLockoutFixedMinutes = $trunkGroupLockoutFixedMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupLockoutFixedMinutes()
    {
        $this->trunkGroupLockoutFixedMinutes = null;
        return $this;
    }

    /**
     * Getter for trunkGroupPermanentLockoutThreshold
     *
     * @return int
     */
    public function getTrunkGroupPermanentLockoutThreshold()
    {
        return $this->trunkGroupPermanentLockoutThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupPermanentLockoutThreshold;
    }

    /**
     * Setter for trunkGroupPermanentLockoutThreshold
     *
     * @param int $trunkGroupPermanentLockoutThreshold
     * @return $this
     */
    public function setTrunkGroupPermanentLockoutThreshold($trunkGroupPermanentLockoutThreshold)
    {
        $this->trunkGroupPermanentLockoutThreshold = $trunkGroupPermanentLockoutThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupPermanentLockoutThreshold()
    {
        $this->trunkGroupPermanentLockoutThreshold = null;
        return $this;
    }
}

