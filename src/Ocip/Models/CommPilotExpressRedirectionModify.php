<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressRedirectionModify
 *
 * CommPilot Express type to transfer to voice Mail or forward to a number
 *         used in the context of a modify.
 *
 * @Groups [{"id":"8c204d784d1904d9eeea996d46de69be:215","type":"sequence"}]
 */
class CommPilotExpressRedirectionModify
{

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:215
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction|null
     */
    private $action = null;

    /**
     * @ElementName forwardingPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:215
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getForwardingPhoneNumber()
    {
        return $this->forwardingPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardingPhoneNumber;
    }

    /**
     * Setter for forwardingPhoneNumber
     *
     * @param string|null $forwardingPhoneNumber
     * @return $this
     */
    public function setForwardingPhoneNumber($forwardingPhoneNumber = null)
    {
        if ($forwardingPhoneNumber === null) {
            $this->forwardingPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardingPhoneNumber = $forwardingPhoneNumber;
        }
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

