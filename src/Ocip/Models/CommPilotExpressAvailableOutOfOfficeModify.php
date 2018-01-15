<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressAvailableOutOfOfficeModify
 *
 * CommPilot Express Available Out Of Office Configuration used in the context of a
 * modify.
 */
class CommPilotExpressAvailableOutOfOfficeModify
{

    /**
     * @ElementName incomingCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName incomingCallNotify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for incomingCalls
     *
     * @ElementName incomingCalls
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @ElementName incomingCalls
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null $incomingCalls
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify|null
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @ElementName incomingCallNotify
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify|null $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify($incomingCallNotify)
    {
        $this->incomingCallNotify = $incomingCallNotify;
        return $this;
    }


}

