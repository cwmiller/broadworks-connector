<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressAvailableOutOfOffice
 *
 * CommPilot Express Available Out Of Office Configuration used in the context of a get.
 *
 * @Groups [{"id":"de7795e1833d459a7eb89116d772fd78:129","type":"sequence"}]
 */
class CommPilotExpressAvailableOutOfOffice
{
    /**
     * @ElementName incomingCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection
     * @Group de7795e1833d459a7eb89116d772fd78:129
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null
     */
    protected $incomingCalls = null;

    /**
     * @ElementName incomingCallNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify
     * @Group de7795e1833d459a7eb89116d772fd78:129
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify|null
     */
    protected $incomingCallNotify = null;

    /**
     * Getter for incomingCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection $incomingCalls)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify $incomingCallNotify)
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

