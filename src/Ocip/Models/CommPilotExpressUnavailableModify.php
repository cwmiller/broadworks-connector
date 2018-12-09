<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressUnavailableModify
 *
 * CommPilot Express Unavailable Configuration used in the context of a modify.
 *
 * @Groups [{"id":"cc98d71eafb1a94fd4bd31d597159369:271","type":"sequence"}]
 */
class CommPilotExpressUnavailableModify
{

    /**
     * @ElementName incomingCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify
     * @Optional
     * @Group cc98d71eafb1a94fd4bd31d597159369:271
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName voiceMailGreeting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting
     * @Optional
     * @Group cc98d71eafb1a94fd4bd31d597159369:271
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting|null
     */
    private $voiceMailGreeting = null;

    /**
     * Getter for incomingCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify $incomingCalls)
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
     * Getter for voiceMailGreeting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting
     */
    public function getVoiceMailGreeting()
    {
        return $this->voiceMailGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMailGreeting;
    }

    /**
     * Setter for voiceMailGreeting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting $voiceMailGreeting
     * @return $this
     */
    public function setVoiceMailGreeting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressVoiceMailGreeting $voiceMailGreeting)
    {
        $this->voiceMailGreeting = $voiceMailGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMailGreeting()
    {
        $this->voiceMailGreeting = null;
        return $this;
    }


}

