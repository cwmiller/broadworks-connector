<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressRedirection
 *
 * CommPilot Express type to transfer to voice Mail or forward to a number
 *         used in the context of a get.
 */
class CommPilotExpressRedirection
{

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction|null
     */
    private $action = null;

    /**
     * @ElementName forwardingPhoneNumber
     * @Type string
     * @var string|null
     */
    private $forwardingPhoneNumber = null;

    /**
     * Getter for action
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAction()
    {
        $this->action = null;
        return $this;
    }

    /**
     * Getter for forwardingPhoneNumber
     *
     * @return string
     */
    public function getForwardingPhoneNumber()
    {
        return $this->forwardingPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardingPhoneNumber;
    }

    /**
     * Setter for forwardingPhoneNumber
     *
     * @param string $forwardingPhoneNumber
     * @return $this
     */
    public function setForwardingPhoneNumber($forwardingPhoneNumber)
    {
        $this->forwardingPhoneNumber = $forwardingPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardingPhoneNumber()
    {
        $this->forwardingPhoneNumber = null;
        return $this;
    }


}

