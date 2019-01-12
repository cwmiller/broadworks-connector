<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberModifyCallProcessingParametersRequest
 *
 * Modify the system call processing configuration for all subscribers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in AS data mode and ignored in the XS data mode:
 *           userCallingLineIdSelection
 *           isExtendedCallingLineIdActive
 *           isRingTimeOutActive
 *           ringTimeoutSeconds
 *           allowEmergencyRemoteOfficeOriginations
 *         Replaced By: SystemSubscriberModifyCallProcessingParametersRequest14sp7
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemSubscriberModifyCallProcessingParametersRequest14sp7
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6417","type":"sequence"}]
 */
class SystemSubscriberModifyCallProcessingParametersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userCallingLineIdSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6417
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection|null
     */
    private $userCallingLineIdSelection = null;

    /**
     * @ElementName isExtendedCallingLineIdActive
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6417
     * @var bool|null
     */
    private $isExtendedCallingLineIdActive = null;

    /**
     * @ElementName isRingTimeOutActive
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6417
     * @var bool|null
     */
    private $isRingTimeOutActive = null;

    /**
     * @ElementName ringTimeoutSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6417
     * @var int|null
     */
    private $ringTimeoutSeconds = null;

    /**
     * @ElementName allowEmergencyRemoteOfficeOriginations
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6417
     * @var bool|null
     */
    private $allowEmergencyRemoteOfficeOriginations = null;

    /**
     * @ElementName maxNoAnswerNumberOfRings
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6417
     * @var int|null
     */
    private $maxNoAnswerNumberOfRings = null;

    /**
     * Getter for userCallingLineIdSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection
     */
    public function getUserCallingLineIdSelection()
    {
        return $this->userCallingLineIdSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userCallingLineIdSelection;
    }

    /**
     * Setter for userCallingLineIdSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection $userCallingLineIdSelection
     * @return $this
     */
    public function setUserCallingLineIdSelection(\CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection $userCallingLineIdSelection)
    {
        $this->userCallingLineIdSelection = $userCallingLineIdSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserCallingLineIdSelection()
    {
        $this->userCallingLineIdSelection = null;
        return $this;
    }

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


}

