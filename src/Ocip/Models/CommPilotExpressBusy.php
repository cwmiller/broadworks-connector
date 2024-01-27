<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressBusy
 *
 * CommPilot Express Available In Office Configuration used in the context of a get.
 *
 * @Groups [{"id":"de7795e1833d459a7eb89116d772fd78:153","type":"sequence"}]
 */
class CommPilotExpressBusy
{
    /**
     * @ElementName incomingCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException
     * @Group de7795e1833d459a7eb89116d772fd78:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException|null
     */
    protected $incomingCalls = null;

    /**
     * @ElementName voiceMailNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify
     * @Group de7795e1833d459a7eb89116d772fd78:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify|null
     */
    protected $voiceMailNotify = null;

    /**
     * Getter for incomingCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException $incomingCalls)
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
     * Getter for voiceMailNotify
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify
     */
    public function getVoiceMailNotify()
    {
        return $this->voiceMailNotify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMailNotify;
    }

    /**
     * Setter for voiceMailNotify
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify $voiceMailNotify
     * @return $this
     */
    public function setVoiceMailNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify $voiceMailNotify)
    {
        $this->voiceMailNotify = $voiceMailNotify;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMailNotify()
    {
        $this->voiceMailNotify = null;
        return $this;
    }
}

