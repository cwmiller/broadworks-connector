<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressBusyModify
 *
 * CommPilot Express Available In Office Configuration used in the context of a
 * modify.
 */
class CommPilotExpressBusyModify
{

    /**
     * @ElementName incomingCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName voiceMailNotify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify|null
     */
    private $voiceMailNotify = null;

    /**
     * Getter for incomingCalls
     *
     * @ElementName incomingCalls
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify|null
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @ElementName incomingCalls
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify|null $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify $incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * Getter for voiceMailNotify
     *
     * @ElementName voiceMailNotify
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify|null
     */
    public function getVoiceMailNotify()
    {
        return $this->voiceMailNotify;
    }

    /**
     * Setter for voiceMailNotify
     *
     * @ElementName voiceMailNotify
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify|null $voiceMailNotify
     * @return $this
     */
    public function setVoiceMailNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify $voiceMailNotify)
    {
        $this->voiceMailNotify = $voiceMailNotify;
        return $this;
    }


}

