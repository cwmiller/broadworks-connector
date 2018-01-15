<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressBusy
 *
 * CommPilot Express Available In Office Configuration used in the context of a
 * get.
 */
class CommPilotExpressBusy
{

    /**
     * @ElementName incomingCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName voiceMailNotify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify|null
     */
    private $voiceMailNotify = null;

    /**
     * Getter for incomingCalls
     *
     * @ElementName incomingCalls
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException|null
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @ElementName incomingCalls
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException|null $incomingCalls
     * @return $this
     */
    public function setIncomingCalls($incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * Getter for voiceMailNotify
     *
     * @ElementName voiceMailNotify
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify|null
     */
    public function getVoiceMailNotify()
    {
        return $this->voiceMailNotify;
    }

    /**
     * Setter for voiceMailNotify
     *
     * @ElementName voiceMailNotify
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotify|null $voiceMailNotify
     * @return $this
     */
    public function setVoiceMailNotify($voiceMailNotify)
    {
        $this->voiceMailNotify = $voiceMailNotify;
        return $this;
    }


}

