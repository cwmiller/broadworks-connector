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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getForwardingPhoneNumber()
    {
        return $this->forwardingPhoneNumber;
    }

    /**
     * Setter for forwardingPhoneNumber
     *
     * @ElementName forwardingPhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $forwardingPhoneNumber
     * @return $this
     */
    public function setForwardingPhoneNumber($forwardingPhoneNumber)
    {
        $this->forwardingPhoneNumber = $forwardingPhoneNumber;
        return $this;
    }


}

