<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRBusy
 *
 * CommPilot Express SR Available In Office Configuration used in the context of a
 * get.
 */
class CommPilotExpressSRBusy
{

    /**
     * @ElementName incomingCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithException|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName incomingCallNotify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for incomingCalls
     *
     * @ElementName incomingCalls
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithException|null
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @ElementName incomingCalls
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithException|null $incomingCalls
     * @return $this
     */
    public function setIncomingCalls($incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * Getter for incomingCallNotify
     *
     * @ElementName incomingCallNotify
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify|null
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @ElementName incomingCallNotify
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify|null $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify($incomingCallNotify)
    {
        $this->incomingCallNotify = $incomingCallNotify;
        return $this;
    }


}

