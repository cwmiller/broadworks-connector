<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterBouncedCallModifyRequest
 *
 * Modify a call center's bounced call settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:2434","type":"sequence"}]
 */
class GroupCallCenterBouncedCallModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName numberOfRingsBeforeBouncingCall
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var int|null
     */
    private $numberOfRingsBeforeBouncingCall = null;

    /**
     * @ElementName enableTransfer
     * @Type bool
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var bool|null
     */
    private $enableTransfer = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName bounceCallWhenAgentUnavailable
     * @Type bool
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var bool|null
     */
    private $bounceCallWhenAgentUnavailable = null;

    /**
     * @ElementName alertCallCenterCallOnHold
     * @Type bool
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var bool|null
     */
    private $alertCallCenterCallOnHold = null;

    /**
     * @ElementName alertCallCenterCallOnHoldSeconds
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var int|null
     */
    private $alertCallCenterCallOnHoldSeconds = null;

    /**
     * @ElementName bounceCallCenterCallOnHold
     * @Type bool
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var bool|null
     */
    private $bounceCallCenterCallOnHold = null;

    /**
     * @ElementName bounceCallCenterCallOnHoldSeconds
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2434
     * @var int|null
     */
    private $bounceCallCenterCallOnHoldSeconds = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for numberOfRingsBeforeBouncingCall
     *
     * @return int
     */
    public function getNumberOfRingsBeforeBouncingCall()
    {
        return $this->numberOfRingsBeforeBouncingCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfRingsBeforeBouncingCall;
    }

    /**
     * Setter for numberOfRingsBeforeBouncingCall
     *
     * @param int $numberOfRingsBeforeBouncingCall
     * @return $this
     */
    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall)
    {
        $this->numberOfRingsBeforeBouncingCall = $numberOfRingsBeforeBouncingCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfRingsBeforeBouncingCall()
    {
        $this->numberOfRingsBeforeBouncingCall = null;
        return $this;
    }

    /**
     * Getter for enableTransfer
     *
     * @return bool
     */
    public function getEnableTransfer()
    {
        return $this->enableTransfer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTransfer;
    }

    /**
     * Setter for enableTransfer
     *
     * @param bool $enableTransfer
     * @return $this
     */
    public function setEnableTransfer($enableTransfer)
    {
        $this->enableTransfer = $enableTransfer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTransfer()
    {
        $this->enableTransfer = null;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @return string|null
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @param string|null $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        if ($transferPhoneNumber === null) {
            $this->transferPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transferPhoneNumber = $transferPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferPhoneNumber()
    {
        $this->transferPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for bounceCallWhenAgentUnavailable
     *
     * @return bool
     */
    public function getBounceCallWhenAgentUnavailable()
    {
        return $this->bounceCallWhenAgentUnavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bounceCallWhenAgentUnavailable;
    }

    /**
     * Setter for bounceCallWhenAgentUnavailable
     *
     * @param bool $bounceCallWhenAgentUnavailable
     * @return $this
     */
    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable)
    {
        $this->bounceCallWhenAgentUnavailable = $bounceCallWhenAgentUnavailable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBounceCallWhenAgentUnavailable()
    {
        $this->bounceCallWhenAgentUnavailable = null;
        return $this;
    }

    /**
     * Getter for alertCallCenterCallOnHold
     *
     * @return bool
     */
    public function getAlertCallCenterCallOnHold()
    {
        return $this->alertCallCenterCallOnHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertCallCenterCallOnHold;
    }

    /**
     * Setter for alertCallCenterCallOnHold
     *
     * @param bool $alertCallCenterCallOnHold
     * @return $this
     */
    public function setAlertCallCenterCallOnHold($alertCallCenterCallOnHold)
    {
        $this->alertCallCenterCallOnHold = $alertCallCenterCallOnHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertCallCenterCallOnHold()
    {
        $this->alertCallCenterCallOnHold = null;
        return $this;
    }

    /**
     * Getter for alertCallCenterCallOnHoldSeconds
     *
     * @return int
     */
    public function getAlertCallCenterCallOnHoldSeconds()
    {
        return $this->alertCallCenterCallOnHoldSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertCallCenterCallOnHoldSeconds;
    }

    /**
     * Setter for alertCallCenterCallOnHoldSeconds
     *
     * @param int $alertCallCenterCallOnHoldSeconds
     * @return $this
     */
    public function setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds)
    {
        $this->alertCallCenterCallOnHoldSeconds = $alertCallCenterCallOnHoldSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertCallCenterCallOnHoldSeconds()
    {
        $this->alertCallCenterCallOnHoldSeconds = null;
        return $this;
    }

    /**
     * Getter for bounceCallCenterCallOnHold
     *
     * @return bool
     */
    public function getBounceCallCenterCallOnHold()
    {
        return $this->bounceCallCenterCallOnHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bounceCallCenterCallOnHold;
    }

    /**
     * Setter for bounceCallCenterCallOnHold
     *
     * @param bool $bounceCallCenterCallOnHold
     * @return $this
     */
    public function setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold)
    {
        $this->bounceCallCenterCallOnHold = $bounceCallCenterCallOnHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBounceCallCenterCallOnHold()
    {
        $this->bounceCallCenterCallOnHold = null;
        return $this;
    }

    /**
     * Getter for bounceCallCenterCallOnHoldSeconds
     *
     * @return int
     */
    public function getBounceCallCenterCallOnHoldSeconds()
    {
        return $this->bounceCallCenterCallOnHoldSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bounceCallCenterCallOnHoldSeconds;
    }

    /**
     * Setter for bounceCallCenterCallOnHoldSeconds
     *
     * @param int $bounceCallCenterCallOnHoldSeconds
     * @return $this
     */
    public function setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds)
    {
        $this->bounceCallCenterCallOnHoldSeconds = $bounceCallCenterCallOnHoldSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBounceCallCenterCallOnHoldSeconds()
    {
        $this->bounceCallCenterCallOnHoldSeconds = null;
        return $this;
    }


}

