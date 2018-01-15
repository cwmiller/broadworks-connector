<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterBouncedCallModifyRequest
 *
 * Modify a call center's bounced call settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterBouncedCallModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName numberOfRingsBeforeBouncingCall
     * @var int|null
     */
    private $numberOfRingsBeforeBouncingCall = null;

    /**
     * @ElementName enableTransfer
     * @var bool|null
     */
    private $enableTransfer = null;

    /**
     * @ElementName transferPhoneNumber
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName bounceCallWhenAgentUnavailable
     * @var bool|null
     */
    private $bounceCallWhenAgentUnavailable = null;

    /**
     * @ElementName alertCallCenterCallOnHold
     * @var bool|null
     */
    private $alertCallCenterCallOnHold = null;

    /**
     * @ElementName alertCallCenterCallOnHoldSeconds
     * @var int|null
     */
    private $alertCallCenterCallOnHoldSeconds = null;

    /**
     * @ElementName bounceCallCenterCallOnHold
     * @var bool|null
     */
    private $bounceCallCenterCallOnHold = null;

    /**
     * @ElementName bounceCallCenterCallOnHoldSeconds
     * @var int|null
     */
    private $bounceCallCenterCallOnHoldSeconds = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for numberOfRingsBeforeBouncingCall
     *
     * @ElementName numberOfRingsBeforeBouncingCall
     * @return int|null
     */
    public function getNumberOfRingsBeforeBouncingCall()
    {
        return $this->numberOfRingsBeforeBouncingCall;
    }

    /**
     * Setter for numberOfRingsBeforeBouncingCall
     *
     * @ElementName numberOfRingsBeforeBouncingCall
     * @param int|null $numberOfRingsBeforeBouncingCall
     * @return $this
     */
    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall)
    {
        $this->numberOfRingsBeforeBouncingCall = $numberOfRingsBeforeBouncingCall;
        return $this;
    }

    /**
     * Getter for enableTransfer
     *
     * @ElementName enableTransfer
     * @return bool|null
     */
    public function getEnableTransfer()
    {
        return $this->enableTransfer;
    }

    /**
     * Setter for enableTransfer
     *
     * @ElementName enableTransfer
     * @param bool|null $enableTransfer
     * @return $this
     */
    public function setEnableTransfer($enableTransfer)
    {
        $this->enableTransfer = $enableTransfer;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @return string|null
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @param string|null $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $this->transferPhoneNumber = $transferPhoneNumber;
        return $this;
    }

    /**
     * Getter for bounceCallWhenAgentUnavailable
     *
     * @ElementName bounceCallWhenAgentUnavailable
     * @return bool|null
     */
    public function getBounceCallWhenAgentUnavailable()
    {
        return $this->bounceCallWhenAgentUnavailable;
    }

    /**
     * Setter for bounceCallWhenAgentUnavailable
     *
     * @ElementName bounceCallWhenAgentUnavailable
     * @param bool|null $bounceCallWhenAgentUnavailable
     * @return $this
     */
    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable)
    {
        $this->bounceCallWhenAgentUnavailable = $bounceCallWhenAgentUnavailable;
        return $this;
    }

    /**
     * Getter for alertCallCenterCallOnHold
     *
     * @ElementName alertCallCenterCallOnHold
     * @return bool|null
     */
    public function getAlertCallCenterCallOnHold()
    {
        return $this->alertCallCenterCallOnHold;
    }

    /**
     * Setter for alertCallCenterCallOnHold
     *
     * @ElementName alertCallCenterCallOnHold
     * @param bool|null $alertCallCenterCallOnHold
     * @return $this
     */
    public function setAlertCallCenterCallOnHold($alertCallCenterCallOnHold)
    {
        $this->alertCallCenterCallOnHold = $alertCallCenterCallOnHold;
        return $this;
    }

    /**
     * Getter for alertCallCenterCallOnHoldSeconds
     *
     * @ElementName alertCallCenterCallOnHoldSeconds
     * @return int|null
     */
    public function getAlertCallCenterCallOnHoldSeconds()
    {
        return $this->alertCallCenterCallOnHoldSeconds;
    }

    /**
     * Setter for alertCallCenterCallOnHoldSeconds
     *
     * @ElementName alertCallCenterCallOnHoldSeconds
     * @param int|null $alertCallCenterCallOnHoldSeconds
     * @return $this
     */
    public function setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds)
    {
        $this->alertCallCenterCallOnHoldSeconds = $alertCallCenterCallOnHoldSeconds;
        return $this;
    }

    /**
     * Getter for bounceCallCenterCallOnHold
     *
     * @ElementName bounceCallCenterCallOnHold
     * @return bool|null
     */
    public function getBounceCallCenterCallOnHold()
    {
        return $this->bounceCallCenterCallOnHold;
    }

    /**
     * Setter for bounceCallCenterCallOnHold
     *
     * @ElementName bounceCallCenterCallOnHold
     * @param bool|null $bounceCallCenterCallOnHold
     * @return $this
     */
    public function setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold)
    {
        $this->bounceCallCenterCallOnHold = $bounceCallCenterCallOnHold;
        return $this;
    }

    /**
     * Getter for bounceCallCenterCallOnHoldSeconds
     *
     * @ElementName bounceCallCenterCallOnHoldSeconds
     * @return int|null
     */
    public function getBounceCallCenterCallOnHoldSeconds()
    {
        return $this->bounceCallCenterCallOnHoldSeconds;
    }

    /**
     * Setter for bounceCallCenterCallOnHoldSeconds
     *
     * @ElementName bounceCallCenterCallOnHoldSeconds
     * @param int|null $bounceCallCenterCallOnHoldSeconds
     * @return $this
     */
    public function setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds)
    {
        $this->bounceCallCenterCallOnHoldSeconds = $bounceCallCenterCallOnHoldSeconds;
        return $this;
    }


}

