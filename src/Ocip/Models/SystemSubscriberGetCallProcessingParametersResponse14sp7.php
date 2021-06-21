<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetCallProcessingParametersResponse14sp7
 *
 * Response to the SystemSubscriberGetCallProcessingParametersRequest14sp7.
 *
 * @see SystemSubscriberGetCallProcessingParametersRequest14sp7
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:35137","type":"sequence"}]
 */
class SystemSubscriberGetCallProcessingParametersResponse14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isExtendedCallingLineIdActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35137
     * @var bool|null
     */
    private $isExtendedCallingLineIdActive = null;

    /**
     * @ElementName isRingTimeOutActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35137
     * @var bool|null
     */
    private $isRingTimeOutActive = null;

    /**
     * @ElementName ringTimeoutSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35137
     * @MinInclusive 1
     * @MaxInclusive 180
     * @var int|null
     */
    private $ringTimeoutSeconds = null;

    /**
     * @ElementName allowEmergencyRemoteOfficeOriginations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35137
     * @var bool|null
     */
    private $allowEmergencyRemoteOfficeOriginations = null;

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


}

