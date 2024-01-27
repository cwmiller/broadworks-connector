<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressBusyModify
 *
 * CommPilot Express Available In Office Configuration used in the context of a modify.
 *
 * @Groups [{"id":"de7795e1833d459a7eb89116d772fd78:165","type":"sequence"}]
 */
class CommPilotExpressBusyModify
{
    /**
     * @ElementName incomingCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:165
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionWithExceptionModify|null
     */
    protected $incomingCalls = null;

    /**
     * @ElementName voiceMailNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:165
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify|null
     */
    protected $voiceMailNotify = null;

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
     * Getter for voiceMailNotify
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify
     */
    public function getVoiceMailNotify()
    {
        return $this->voiceMailNotify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMailNotify;
    }

    /**
     * Setter for voiceMailNotify
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify $voiceMailNotify
     * @return $this
     */
    public function setVoiceMailNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressEmailNotifyModify $voiceMailNotify)
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

