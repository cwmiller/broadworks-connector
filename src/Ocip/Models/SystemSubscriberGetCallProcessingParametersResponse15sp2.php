<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetCallProcessingParametersResponse15sp2
 *
 * Response to the SystemSubscriberGetCallProcessingParametersRequest15sp2.
 *                 Replaced by: SystemSubscriberGetCallProcessingParametersResponse17
 *
 * @see SystemSubscriberGetCallProcessingParametersRequest15sp2
 * @see SystemSubscriberGetCallProcessingParametersResponse17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16413","type":"sequence"}]
 */
class SystemSubscriberGetCallProcessingParametersResponse15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isExtendedCallingLineIdActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16413
     * @var bool|null
     */
    private $isExtendedCallingLineIdActive = null;

    /**
     * @ElementName isRingTimeOutActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16413
     * @var bool|null
     */
    private $isRingTimeOutActive = null;

    /**
     * @ElementName ringTimeoutSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16413
     * @MinInclusive 1
     * @MaxInclusive 180
     * @var int|null
     */
    private $ringTimeoutSeconds = null;

    /**
     * @ElementName allowEmergencyRemoteOfficeOriginations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16413
     * @var bool|null
     */
    private $allowEmergencyRemoteOfficeOriginations = null;

    /**
     * @ElementName maxNoAnswerNumberOfRings
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16413
     * @MinInclusive 6
     * @MaxInclusive 20
     * @var int|null
     */
    private $maxNoAnswerNumberOfRings = null;

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

