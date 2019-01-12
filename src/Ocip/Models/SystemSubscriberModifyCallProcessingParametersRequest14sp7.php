<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberModifyCallProcessingParametersRequest14sp7
 *
 * Modify the system call processing configuration for all subscribers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in XS data mode and ignored in the AS data mode:
 *           minNoAnswerNumberOfRings
 *
 *         The following elements are only used in AS data mode and ignored in the XS data mode:
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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16269","type":"sequence"}]
 */
class SystemSubscriberModifyCallProcessingParametersRequest14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isExtendedCallingLineIdActive
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var bool|null
     */
    private $isExtendedCallingLineIdActive = null;

    /**
     * @ElementName isRingTimeOutActive
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var bool|null
     */
    private $isRingTimeOutActive = null;

    /**
     * @ElementName ringTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var int|null
     */
    private $ringTimeoutSeconds = null;

    /**
     * @ElementName allowEmergencyRemoteOfficeOriginations
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var bool|null
     */
    private $allowEmergencyRemoteOfficeOriginations = null;

    /**
     * @ElementName maxNoAnswerNumberOfRings
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var int|null
     */
    private $maxNoAnswerNumberOfRings = null;

    /**
     * @ElementName minNoAnswerNumberOfRings
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var int|null
     */
    private $minNoAnswerNumberOfRings = null;

    /**
     * @ElementName incomingCallToUserAliasMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallToUserAliasMode
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallToUserAliasMode|null
     */
    private $incomingCallToUserAliasMode = null;

    /**
     * @ElementName bypassTerminationLoopDetection
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var bool|null
     */
    private $bypassTerminationLoopDetection = null;

    /**
     * @ElementName honorCLIDBlockingForEmergencyCalls
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var bool|null
     */
    private $honorCLIDBlockingForEmergencyCalls = null;

    /**
     * @ElementName useUnicodeIdentityName
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16269
     * @var bool|null
     */
    private $useUnicodeIdentityName = null;

    /**
     * Getter for isExtendedCallingLineIdActive
     *
     * @return bool
     */
    public function getIsExtendedCallingLineIdActive()
    {
        return $this->isExtendedCallingLineIdActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isExtendedCallingLineIdActive;
    }

    /**
     * Setter for isExtendedCallingLineIdActive
     *
     * @param bool $isExtendedCallingLineIdActive
     * @return $this
     */
    public function setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive)
    {
        $this->isExtendedCallingLineIdActive = $isExtendedCallingLineIdActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsExtendedCallingLineIdActive()
    {
        $this->isExtendedCallingLineIdActive = null;
        return $this;
    }

    /**
     * Getter for isRingTimeOutActive
     *
     * @return bool
     */
    public function getIsRingTimeOutActive()
    {
        return $this->isRingTimeOutActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isRingTimeOutActive;
    }

    /**
     * Setter for isRingTimeOutActive
     *
     * @param bool $isRingTimeOutActive
     * @return $this
     */
    public function setIsRingTimeOutActive($isRingTimeOutActive)
    {
        $this->isRingTimeOutActive = $isRingTimeOutActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsRingTimeOutActive()
    {
        $this->isRingTimeOutActive = null;
        return $this;
    }

    /**
     * Getter for ringTimeoutSeconds
     *
     * @return int
     */
    public function getRingTimeoutSeconds()
    {
        return $this->ringTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringTimeoutSeconds;
    }

    /**
     * Setter for ringTimeoutSeconds
     *
     * @param int $ringTimeoutSeconds
     * @return $this
     */
    public function setRingTimeoutSeconds($ringTimeoutSeconds)
    {
        $this->ringTimeoutSeconds = $ringTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingTimeoutSeconds()
    {
        $this->ringTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for allowEmergencyRemoteOfficeOriginations
     *
     * @return bool
     */
    public function getAllowEmergencyRemoteOfficeOriginations()
    {
        return $this->allowEmergencyRemoteOfficeOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowEmergencyRemoteOfficeOriginations;
    }

    /**
     * Setter for allowEmergencyRemoteOfficeOriginations
     *
     * @param bool $allowEmergencyRemoteOfficeOriginations
     * @return $this
     */
    public function setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations)
    {
        $this->allowEmergencyRemoteOfficeOriginations = $allowEmergencyRemoteOfficeOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowEmergencyRemoteOfficeOriginations()
    {
        $this->allowEmergencyRemoteOfficeOriginations = null;
        return $this;
    }

    /**
     * Getter for maxNoAnswerNumberOfRings
     *
     * @return int
     */
    public function getMaxNoAnswerNumberOfRings()
    {
        return $this->maxNoAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxNoAnswerNumberOfRings;
    }

    /**
     * Setter for maxNoAnswerNumberOfRings
     *
     * @param int $maxNoAnswerNumberOfRings
     * @return $this
     */
    public function setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings)
    {
        $this->maxNoAnswerNumberOfRings = $maxNoAnswerNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxNoAnswerNumberOfRings()
    {
        $this->maxNoAnswerNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for minNoAnswerNumberOfRings
     *
     * @return int
     */
    public function getMinNoAnswerNumberOfRings()
    {
        return $this->minNoAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minNoAnswerNumberOfRings;
    }

    /**
     * Setter for minNoAnswerNumberOfRings
     *
     * @param int $minNoAnswerNumberOfRings
     * @return $this
     */
    public function setMinNoAnswerNumberOfRings($minNoAnswerNumberOfRings)
    {
        $this->minNoAnswerNumberOfRings = $minNoAnswerNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinNoAnswerNumberOfRings()
    {
        $this->minNoAnswerNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for incomingCallToUserAliasMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallToUserAliasMode
     */
    public function getIncomingCallToUserAliasMode()
    {
        return $this->incomingCallToUserAliasMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCallToUserAliasMode;
    }

    /**
     * Setter for incomingCallToUserAliasMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallToUserAliasMode $incomingCallToUserAliasMode
     * @return $this
     */
    public function setIncomingCallToUserAliasMode(\CWM\BroadWorksConnector\Ocip\Models\IncomingCallToUserAliasMode $incomingCallToUserAliasMode)
    {
        $this->incomingCallToUserAliasMode = $incomingCallToUserAliasMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingCallToUserAliasMode()
    {
        $this->incomingCallToUserAliasMode = null;
        return $this;
    }

    /**
     * Getter for bypassTerminationLoopDetection
     *
     * @return bool
     */
    public function getBypassTerminationLoopDetection()
    {
        return $this->bypassTerminationLoopDetection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bypassTerminationLoopDetection;
    }

    /**
     * Setter for bypassTerminationLoopDetection
     *
     * @param bool $bypassTerminationLoopDetection
     * @return $this
     */
    public function setBypassTerminationLoopDetection($bypassTerminationLoopDetection)
    {
        $this->bypassTerminationLoopDetection = $bypassTerminationLoopDetection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBypassTerminationLoopDetection()
    {
        $this->bypassTerminationLoopDetection = null;
        return $this;
    }

    /**
     * Getter for honorCLIDBlockingForEmergencyCalls
     *
     * @return bool
     */
    public function getHonorCLIDBlockingForEmergencyCalls()
    {
        return $this->honorCLIDBlockingForEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->honorCLIDBlockingForEmergencyCalls;
    }

    /**
     * Setter for honorCLIDBlockingForEmergencyCalls
     *
     * @param bool $honorCLIDBlockingForEmergencyCalls
     * @return $this
     */
    public function setHonorCLIDBlockingForEmergencyCalls($honorCLIDBlockingForEmergencyCalls)
    {
        $this->honorCLIDBlockingForEmergencyCalls = $honorCLIDBlockingForEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHonorCLIDBlockingForEmergencyCalls()
    {
        $this->honorCLIDBlockingForEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for useUnicodeIdentityName
     *
     * @return bool
     */
    public function getUseUnicodeIdentityName()
    {
        return $this->useUnicodeIdentityName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUnicodeIdentityName;
    }

    /**
     * Setter for useUnicodeIdentityName
     *
     * @param bool $useUnicodeIdentityName
     * @return $this
     */
    public function setUseUnicodeIdentityName($useUnicodeIdentityName)
    {
        $this->useUnicodeIdentityName = $useUnicodeIdentityName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUnicodeIdentityName()
    {
        $this->useUnicodeIdentityName = null;
        return $this;
    }


}

