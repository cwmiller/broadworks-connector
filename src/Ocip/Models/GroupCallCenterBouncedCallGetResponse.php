<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterBouncedCallGetResponse
 *
 * Response to the GroupCallCenterBouncedCallGetRequest.
 *
 * @see GroupCallCenterBouncedCallGetRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:3253","type":"sequence"}]
 */
class GroupCallCenterBouncedCallGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3253
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName numberOfRingsBeforeBouncingCall
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3253
     * @var int|null
     */
    private $numberOfRingsBeforeBouncingCall = null;

    /**
     * @ElementName enableTransfer
     * @Type bool
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3253
     * @var bool|null
     */
    private $enableTransfer = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3253
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName bounceCallWhenAgentUnavailable
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3253
     * @var bool|null
     */
    private $bounceCallWhenAgentUnavailable = null;

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
     * @return string
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @param string $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $this->transferPhoneNumber = $transferPhoneNumber;
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


}

