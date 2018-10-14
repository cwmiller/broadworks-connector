<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetCallProcessingParametersResponse15
 *
 * Response to the SystemSubscriberGetCallProcessingParametersRequest15.
 *
 * @see SystemSubscriberGetCallProcessingParametersRequest15
 */
class SystemSubscriberGetCallProcessingParametersResponse15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallingLineIdSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection|null
     */
    private $userCallingLineIdSelection = null;

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
     * Getter for userCallingLineIdSelection
     *
     * @ElementName userCallingLineIdSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection|null
     */
    public function getUserCallingLineIdSelection()
    {
        return $this->userCallingLineIdSelection;
    }

    /**
     * Setter for userCallingLineIdSelection
     *
     * @ElementName userCallingLineIdSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection|null $userCallingLineIdSelection
     * @return $this
     */
    public function setUserCallingLineIdSelection(\CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection $userCallingLineIdSelection)
    {
        $this->userCallingLineIdSelection = $userCallingLineIdSelection;
        return $this;
    }

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


}

