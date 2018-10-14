<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationPasswordRulesGetResponse
 *
 * Response to SystemSIPAuthenticationPasswordRulesGetRequest.
 *         Contains the SIP authentication password rules for the system.
 *
 * @see SystemSIPAuthenticationPasswordRulesGetRequest
 */
class SystemSIPAuthenticationPasswordRulesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName endpointAuthenticationLockoutType
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null
     */
    private $endpointAuthenticationLockoutType = null;

    /**
     * @ElementName endpointTemporaryLockoutThreshold
     * @var int|null
     */
    private $endpointTemporaryLockoutThreshold = null;

    /**
     * @ElementName endpointWaitAlgorithm
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null
     */
    private $endpointWaitAlgorithm = null;

    /**
     * @ElementName endpointLockoutFixedMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null
     */
    private $endpointLockoutFixedMinutes = null;

    /**
     * @ElementName endpointPermanentLockoutThreshold
     * @var int|null
     */
    private $endpointPermanentLockoutThreshold = null;

    /**
     * @ElementName trunkGroupAuthenticationLockoutType
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null
     */
    private $trunkGroupAuthenticationLockoutType = null;

    /**
     * @ElementName trunkGroupTemporaryLockoutThreshold
     * @var int|null
     */
    private $trunkGroupTemporaryLockoutThreshold = null;

    /**
     * @ElementName trunkGroupWaitAlgorithm
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null
     */
    private $trunkGroupWaitAlgorithm = null;

    /**
     * @ElementName trunkGroupLockoutFixedMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null
     */
    private $trunkGroupLockoutFixedMinutes = null;

    /**
     * @ElementName trunkGroupPermanentLockoutThreshold
     * @var int|null
     */
    private $trunkGroupPermanentLockoutThreshold = null;

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
     * Getter for endpointAuthenticationLockoutType
     *
     * @ElementName endpointAuthenticationLockoutType
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null
     */
    public function getEndpointAuthenticationLockoutType()
    {
        return $this->endpointAuthenticationLockoutType;
    }

    /**
     * Setter for endpointAuthenticationLockoutType
     *
     * @ElementName endpointAuthenticationLockoutType
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null $endpointAuthenticationLockoutType
     * @return $this
     */
    public function setEndpointAuthenticationLockoutType(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType $endpointAuthenticationLockoutType)
    {
        $this->endpointAuthenticationLockoutType = $endpointAuthenticationLockoutType;
        return $this;
    }

    /**
     * Getter for endpointTemporaryLockoutThreshold
     *
     * @ElementName endpointTemporaryLockoutThreshold
     * @return int|null
     */
    public function getEndpointTemporaryLockoutThreshold()
    {
        return $this->endpointTemporaryLockoutThreshold;
    }

    /**
     * Setter for endpointTemporaryLockoutThreshold
     *
     * @ElementName endpointTemporaryLockoutThreshold
     * @param int|null $endpointTemporaryLockoutThreshold
     * @return $this
     */
    public function setEndpointTemporaryLockoutThreshold($endpointTemporaryLockoutThreshold)
    {
        $this->endpointTemporaryLockoutThreshold = $endpointTemporaryLockoutThreshold;
        return $this;
    }

    /**
     * Getter for endpointWaitAlgorithm
     *
     * @ElementName endpointWaitAlgorithm
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null
     */
    public function getEndpointWaitAlgorithm()
    {
        return $this->endpointWaitAlgorithm;
    }

    /**
     * Setter for endpointWaitAlgorithm
     *
     * @ElementName endpointWaitAlgorithm
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null $endpointWaitAlgorithm
     * @return $this
     */
    public function setEndpointWaitAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType $endpointWaitAlgorithm)
    {
        $this->endpointWaitAlgorithm = $endpointWaitAlgorithm;
        return $this;
    }

    /**
     * Getter for endpointLockoutFixedMinutes
     *
     * @ElementName endpointLockoutFixedMinutes
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null
     */
    public function getEndpointLockoutFixedMinutes()
    {
        return $this->endpointLockoutFixedMinutes;
    }

    /**
     * Setter for endpointLockoutFixedMinutes
     *
     * @ElementName endpointLockoutFixedMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null $endpointLockoutFixedMinutes
     * @return $this
     */
    public function setEndpointLockoutFixedMinutes(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes $endpointLockoutFixedMinutes)
    {
        $this->endpointLockoutFixedMinutes = $endpointLockoutFixedMinutes;
        return $this;
    }

    /**
     * Getter for endpointPermanentLockoutThreshold
     *
     * @ElementName endpointPermanentLockoutThreshold
     * @return int|null
     */
    public function getEndpointPermanentLockoutThreshold()
    {
        return $this->endpointPermanentLockoutThreshold;
    }

    /**
     * Setter for endpointPermanentLockoutThreshold
     *
     * @ElementName endpointPermanentLockoutThreshold
     * @param int|null $endpointPermanentLockoutThreshold
     * @return $this
     */
    public function setEndpointPermanentLockoutThreshold($endpointPermanentLockoutThreshold)
    {
        $this->endpointPermanentLockoutThreshold = $endpointPermanentLockoutThreshold;
        return $this;
    }

    /**
     * Getter for trunkGroupAuthenticationLockoutType
     *
     * @ElementName trunkGroupAuthenticationLockoutType
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null
     */
    public function getTrunkGroupAuthenticationLockoutType()
    {
        return $this->trunkGroupAuthenticationLockoutType;
    }

    /**
     * Setter for trunkGroupAuthenticationLockoutType
     *
     * @ElementName trunkGroupAuthenticationLockoutType
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType|null $trunkGroupAuthenticationLockoutType
     * @return $this
     */
    public function setTrunkGroupAuthenticationLockoutType(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutType $trunkGroupAuthenticationLockoutType)
    {
        $this->trunkGroupAuthenticationLockoutType = $trunkGroupAuthenticationLockoutType;
        return $this;
    }

    /**
     * Getter for trunkGroupTemporaryLockoutThreshold
     *
     * @ElementName trunkGroupTemporaryLockoutThreshold
     * @return int|null
     */
    public function getTrunkGroupTemporaryLockoutThreshold()
    {
        return $this->trunkGroupTemporaryLockoutThreshold;
    }

    /**
     * Setter for trunkGroupTemporaryLockoutThreshold
     *
     * @ElementName trunkGroupTemporaryLockoutThreshold
     * @param int|null $trunkGroupTemporaryLockoutThreshold
     * @return $this
     */
    public function setTrunkGroupTemporaryLockoutThreshold($trunkGroupTemporaryLockoutThreshold)
    {
        $this->trunkGroupTemporaryLockoutThreshold = $trunkGroupTemporaryLockoutThreshold;
        return $this;
    }

    /**
     * Getter for trunkGroupWaitAlgorithm
     *
     * @ElementName trunkGroupWaitAlgorithm
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null
     */
    public function getTrunkGroupWaitAlgorithm()
    {
        return $this->trunkGroupWaitAlgorithm;
    }

    /**
     * Setter for trunkGroupWaitAlgorithm
     *
     * @ElementName trunkGroupWaitAlgorithm
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType|null $trunkGroupWaitAlgorithm
     * @return $this
     */
    public function setTrunkGroupWaitAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutWaitAlgorithmType $trunkGroupWaitAlgorithm)
    {
        $this->trunkGroupWaitAlgorithm = $trunkGroupWaitAlgorithm;
        return $this;
    }

    /**
     * Getter for trunkGroupLockoutFixedMinutes
     *
     * @ElementName trunkGroupLockoutFixedMinutes
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null
     */
    public function getTrunkGroupLockoutFixedMinutes()
    {
        return $this->trunkGroupLockoutFixedMinutes;
    }

    /**
     * Setter for trunkGroupLockoutFixedMinutes
     *
     * @ElementName trunkGroupLockoutFixedMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes|null $trunkGroupLockoutFixedMinutes
     * @return $this
     */
    public function setTrunkGroupLockoutFixedMinutes(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationLockoutFixedWaitTimeMinutes $trunkGroupLockoutFixedMinutes)
    {
        $this->trunkGroupLockoutFixedMinutes = $trunkGroupLockoutFixedMinutes;
        return $this;
    }

    /**
     * Getter for trunkGroupPermanentLockoutThreshold
     *
     * @ElementName trunkGroupPermanentLockoutThreshold
     * @return int|null
     */
    public function getTrunkGroupPermanentLockoutThreshold()
    {
        return $this->trunkGroupPermanentLockoutThreshold;
    }

    /**
     * Setter for trunkGroupPermanentLockoutThreshold
     *
     * @ElementName trunkGroupPermanentLockoutThreshold
     * @param int|null $trunkGroupPermanentLockoutThreshold
     * @return $this
     */
    public function setTrunkGroupPermanentLockoutThreshold($trunkGroupPermanentLockoutThreshold)
    {
        $this->trunkGroupPermanentLockoutThreshold = $trunkGroupPermanentLockoutThreshold;
        return $this;
    }


}

