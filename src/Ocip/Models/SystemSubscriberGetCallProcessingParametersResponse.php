<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetCallProcessingParametersResponse
 *
 * Response to the SystemSubscriberGetCallProcessingParametersRequest.
 *         Replaced By: SystemSubscriberGetCallProcessingParametersResponse14sp3
 *
 * @see SystemSubscriberGetCallProcessingParametersRequest
 * @see SystemSubscriberGetCallProcessingParametersResponse14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6372","type":"sequence"}]
 */
class SystemSubscriberGetCallProcessingParametersResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallingLineIdSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6372
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemUserCallingLineIdSelection|null
     */
    private $userCallingLineIdSelection = null;

    /**
     * @ElementName isExtendedCallingLineIdActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6372
     * @var bool|null
     */
    private $isExtendedCallingLineIdActive = null;

    /**
     * @ElementName isRingTimeOutActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6372
     * @var bool|null
     */
    private $isRingTimeOutActive = null;

    /**
     * @ElementName ringTimeoutSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6372
     * @var int|null
     */
    private $ringTimeoutSeconds = null;

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


}

