<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRRedirectionModify
 *
 * CommPilot Express SR type to transfer to voice Mail or forward to a number
 *         used in the context of a modify.
 */
class CommPilotExpressSRRedirectionModify
{

    /**
     * @ElementName action
     * @var string|null
     */
    private $action = null;

    /**
     * @ElementName forwardingPhoneNumber
     * @var string|null
     */
    private $forwardingPhoneNumber = null;

    /**
     * Getter for action
     *
     * @ElementName action
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param string|null $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Getter for forwardingPhoneNumber
     *
     * @ElementName forwardingPhoneNumber
     * @return string|null
     */
    public function getForwardingPhoneNumber()
    {
        return $this->forwardingPhoneNumber;
    }

    /**
     * Setter for forwardingPhoneNumber
     *
     * @ElementName forwardingPhoneNumber
     * @param string|null $forwardingPhoneNumber
     * @return $this
     */
    public function setForwardingPhoneNumber($forwardingPhoneNumber)
    {
        $this->forwardingPhoneNumber = $forwardingPhoneNumber;
        return $this;
    }


}

