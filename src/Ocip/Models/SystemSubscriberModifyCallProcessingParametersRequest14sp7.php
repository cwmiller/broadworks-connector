<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberModifyCallProcessingParametersRequest14sp7
 *
 * Modify the system call processing configuration for all subscribers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in XS data mode and ignored in the
 * AS data mode:
 *           minNoAnswerNumberOfRings
 *
 *         The following elements are only used in AS data mode and ignored in the
 * XS data mode:
 *           isExtendedCallingLineIdActive
 *           isRingTimeOutActive
 *           ringTimeoutSeconds
 *           allowEmergencyRemoteOfficeOriginations
 *           incomingCallToUserAliasMode
 *           bypassTerminationLoopDetection
 *           honorCLIDBlockingForEmergencyCalls
 *           useUnicodeIdentityName
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSubscriberModifyCallProcessingParametersRequest14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isExtendedCallingLineIdActive
     * @var bool|null
     */
    private $isExtendedCallingLineIdActive = null;

    /**
     * @ElementName isRingTimeOutActive
     * @var bool|null
     */
    private $isRingTimeOutActive = null;

    /**
     * @ElementName ringTimeoutSeconds
     * @var int|null
     */
    private $ringTimeoutSeconds = null;

    /**
     * @ElementName allowEmergencyRemoteOfficeOriginations
     * @var bool|null
     */
    private $allowEmergencyRemoteOfficeOriginations = null;

    /**
     * @ElementName maxNoAnswerNumberOfRings
     * @var int|null
     */
    private $maxNoAnswerNumberOfRings = null;

    /**
     * @ElementName minNoAnswerNumberOfRings
     * @var int|null
     */
    private $minNoAnswerNumberOfRings = null;

    /**
     * @ElementName incomingCallToUserAliasMode
     * @var string|null
     */
    private $incomingCallToUserAliasMode = null;

    /**
     * @ElementName bypassTerminationLoopDetection
     * @var bool|null
     */
    private $bypassTerminationLoopDetection = null;

    /**
     * @ElementName honorCLIDBlockingForEmergencyCalls
     * @var bool|null
     */
    private $honorCLIDBlockingForEmergencyCalls = null;

    /**
     * @ElementName useUnicodeIdentityName
     * @var bool|null
     */
    private $useUnicodeIdentityName = null;

    /**
     * Getter for isExtendedCallingLineIdActive
     *
     * @ElementName isExtendedCallingLineIdActive
     * @return bool|null
     */
    public function getIsExtendedCallingLineIdActive()
    {
        return $this->isExtendedCallingLineIdActive;
    }

    /**
     * Setter for isExtendedCallingLineIdActive
     *
     * @ElementName isExtendedCallingLineIdActive
     * @param bool|null $isExtendedCallingLineIdActive
     * @return $this
     */
    public function setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive)
    {
        $this->isExtendedCallingLineIdActive = $isExtendedCallingLineIdActive;
        return $this;
    }

    /**
     * Getter for isRingTimeOutActive
     *
     * @ElementName isRingTimeOutActive
     * @return bool|null
     */
    public function getIsRingTimeOutActive()
    {
        return $this->isRingTimeOutActive;
    }

    /**
     * Setter for isRingTimeOutActive
     *
     * @ElementName isRingTimeOutActive
     * @param bool|null $isRingTimeOutActive
     * @return $this
     */
    public function setIsRingTimeOutActive($isRingTimeOutActive)
    {
        $this->isRingTimeOutActive = $isRingTimeOutActive;
        return $this;
    }

    /**
     * Getter for ringTimeoutSeconds
     *
     * @ElementName ringTimeoutSeconds
     * @return int|null
     */
    public function getRingTimeoutSeconds()
    {
        return $this->ringTimeoutSeconds;
    }

    /**
     * Setter for ringTimeoutSeconds
     *
     * @ElementName ringTimeoutSeconds
     * @param int|null $ringTimeoutSeconds
     * @return $this
     */
    public function setRingTimeoutSeconds($ringTimeoutSeconds)
    {
        $this->ringTimeoutSeconds = $ringTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for allowEmergencyRemoteOfficeOriginations
     *
     * @ElementName allowEmergencyRemoteOfficeOriginations
     * @return bool|null
     */
    public function getAllowEmergencyRemoteOfficeOriginations()
    {
        return $this->allowEmergencyRemoteOfficeOriginations;
    }

    /**
     * Setter for allowEmergencyRemoteOfficeOriginations
     *
     * @ElementName allowEmergencyRemoteOfficeOriginations
     * @param bool|null $allowEmergencyRemoteOfficeOriginations
     * @return $this
     */
    public function setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations)
    {
        $this->allowEmergencyRemoteOfficeOriginations = $allowEmergencyRemoteOfficeOriginations;
        return $this;
    }

    /**
     * Getter for maxNoAnswerNumberOfRings
     *
     * @ElementName maxNoAnswerNumberOfRings
     * @return int|null
     */
    public function getMaxNoAnswerNumberOfRings()
    {
        return $this->maxNoAnswerNumberOfRings;
    }

    /**
     * Setter for maxNoAnswerNumberOfRings
     *
     * @ElementName maxNoAnswerNumberOfRings
     * @param int|null $maxNoAnswerNumberOfRings
     * @return $this
     */
    public function setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings)
    {
        $this->maxNoAnswerNumberOfRings = $maxNoAnswerNumberOfRings;
        return $this;
    }

    /**
     * Getter for minNoAnswerNumberOfRings
     *
     * @ElementName minNoAnswerNumberOfRings
     * @return int|null
     */
    public function getMinNoAnswerNumberOfRings()
    {
        return $this->minNoAnswerNumberOfRings;
    }

    /**
     * Setter for minNoAnswerNumberOfRings
     *
     * @ElementName minNoAnswerNumberOfRings
     * @param int|null $minNoAnswerNumberOfRings
     * @return $this
     */
    public function setMinNoAnswerNumberOfRings($minNoAnswerNumberOfRings)
    {
        $this->minNoAnswerNumberOfRings = $minNoAnswerNumberOfRings;
        return $this;
    }

    /**
     * Getter for incomingCallToUserAliasMode
     *
     * @ElementName incomingCallToUserAliasMode
     * @return string|null
     */
    public function getIncomingCallToUserAliasMode()
    {
        return $this->incomingCallToUserAliasMode;
    }

    /**
     * Setter for incomingCallToUserAliasMode
     *
     * @ElementName incomingCallToUserAliasMode
     * @param string|null $incomingCallToUserAliasMode
     * @return $this
     */
    public function setIncomingCallToUserAliasMode($incomingCallToUserAliasMode)
    {
        $this->incomingCallToUserAliasMode = $incomingCallToUserAliasMode;
        return $this;
    }

    /**
     * Getter for bypassTerminationLoopDetection
     *
     * @ElementName bypassTerminationLoopDetection
     * @return bool|null
     */
    public function getBypassTerminationLoopDetection()
    {
        return $this->bypassTerminationLoopDetection;
    }

    /**
     * Setter for bypassTerminationLoopDetection
     *
     * @ElementName bypassTerminationLoopDetection
     * @param bool|null $bypassTerminationLoopDetection
     * @return $this
     */
    public function setBypassTerminationLoopDetection($bypassTerminationLoopDetection)
    {
        $this->bypassTerminationLoopDetection = $bypassTerminationLoopDetection;
        return $this;
    }

    /**
     * Getter for honorCLIDBlockingForEmergencyCalls
     *
     * @ElementName honorCLIDBlockingForEmergencyCalls
     * @return bool|null
     */
    public function getHonorCLIDBlockingForEmergencyCalls()
    {
        return $this->honorCLIDBlockingForEmergencyCalls;
    }

    /**
     * Setter for honorCLIDBlockingForEmergencyCalls
     *
     * @ElementName honorCLIDBlockingForEmergencyCalls
     * @param bool|null $honorCLIDBlockingForEmergencyCalls
     * @return $this
     */
    public function setHonorCLIDBlockingForEmergencyCalls($honorCLIDBlockingForEmergencyCalls)
    {
        $this->honorCLIDBlockingForEmergencyCalls = $honorCLIDBlockingForEmergencyCalls;
        return $this;
    }

    /**
     * Getter for useUnicodeIdentityName
     *
     * @ElementName useUnicodeIdentityName
     * @return bool|null
     */
    public function getUseUnicodeIdentityName()
    {
        return $this->useUnicodeIdentityName;
    }

    /**
     * Setter for useUnicodeIdentityName
     *
     * @ElementName useUnicodeIdentityName
     * @param bool|null $useUnicodeIdentityName
     * @return $this
     */
    public function setUseUnicodeIdentityName($useUnicodeIdentityName)
    {
        $this->useUnicodeIdentityName = $useUnicodeIdentityName;
        return $this;
    }


}

