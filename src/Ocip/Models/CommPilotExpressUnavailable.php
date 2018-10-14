<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressUnavailable
 *
 * CommPilot Express Unavailable Configuration used in the context of a get.
 */
class CommPilotExpressUnavailable
{

    /**
     * @ElementName incomingCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName voiceMailGreeting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting|null
     */
    private $voiceMailGreeting = null;

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
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithException $incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * Getter for voiceMailGreeting
     *
     * @ElementName voiceMailGreeting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting|null
     */
    public function getVoiceMailGreeting()
    {
        return $this->voiceMailGreeting;
    }

    /**
     * Setter for voiceMailGreeting
     *
     * @ElementName voiceMailGreeting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting|null $voiceMailGreeting
     * @return $this
     */
    public function setVoiceMailGreeting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting $voiceMailGreeting)
    {
        $this->voiceMailGreeting = $voiceMailGreeting;
        return $this;
    }


}

