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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName incomingCallNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for incomingCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify $incomingCalls)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify $incomingCallNotify)
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

