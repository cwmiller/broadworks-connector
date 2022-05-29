<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetCallProcessingParametersResponse18sp1
 *
 * Response to the SystemSubscriberGetCallProcessingParametersRequest18sp1.
 *
 * @see SystemSubscriberGetCallProcessingParametersRequest18sp1
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17985","type":"sequence"}]
 */
class SystemSubscriberGetCallProcessingParametersResponse18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isExtendedCallingLineIdActive
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @var bool|null
     */
    protected $isExtendedCallingLineIdActive = null;

    /**
     * @ElementName isRingTimeOutActive
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @var bool|null
     */
    protected $isRingTimeOutActive = null;

    /**
     * @ElementName ringTimeoutSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @MinInclusive 1
     * @MaxInclusive 180
     * @var int|null
     */
    protected $ringTimeoutSeconds = null;

    /**
     * @ElementName allowEmergencyRemoteOfficeOriginations
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @var bool|null
     */
    protected $allowEmergencyRemoteOfficeOriginations = null;

    /**
     * @ElementName maxNoAnswerNumberOfRings
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @MinInclusive 6
     * @MaxInclusive 20
     * @var int|null
     */
    protected $maxNoAnswerNumberOfRings = null;

    /**
     * @ElementName incomingCallToUserAliasMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallToUserAliasMode
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallToUserAliasMode|null
     */
    protected $incomingCallToUserAliasMode = null;

    /**
     * @ElementName bypassTerminationLoopDetection
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @var bool|null
     */
    protected $bypassTerminationLoopDetection = null;

    /**
     * @ElementName honorCLIDBlockingForEmergencyCalls
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @var bool|null
     */
    protected $honorCLIDBlockingForEmergencyCalls = null;

    /**
     * @ElementName useUnicodeIdentityName
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17985
     * @var bool|null
     */
    protected $useUnicodeIdentityName = null;

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

