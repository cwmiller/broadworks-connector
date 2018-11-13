<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRUnavailableModify
 *
 * CommPilot Express SR Unavailable Configuration used in the context of a modify.
 */
class CommPilotExpressSRUnavailableModify
{

    /**
     * @ElementName incomingCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithExceptionModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithExceptionModify|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName incomingCallNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for incomingCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithExceptionModify
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithExceptionModify $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithExceptionModify $incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingCalls()
    {
        $this->incomingCalls = null;
        return $this;
    }

    /**
     * Getter for incomingCallNotify
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify $incomingCallNotify)
    {
        $this->incomingCallNotify = $incomingCallNotify;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingCallNotify()
    {
        $this->incomingCallNotify = null;
        return $this;
    }


}

