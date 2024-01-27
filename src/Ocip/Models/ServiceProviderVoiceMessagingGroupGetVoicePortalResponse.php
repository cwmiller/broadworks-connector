<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalResponse
 *
 * Response to ServiceProviderVoiceMessagingGroupGetVoicePortalRequest.
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalRequest
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:461","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName voicePortalScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:461
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope|null
     */
    protected $voicePortalScope = null;

    /**
     * Getter for voicePortalScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope
     */
    public function getVoicePortalScope()
    {
        return $this->voicePortalScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalScope;
    }

    /**
     * Setter for voicePortalScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope $voicePortalScope
     * @return $this
     */
    public function setVoicePortalScope(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope $voicePortalScope)
    {
        $this->voicePortalScope = $voicePortalScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalScope()
    {
        $this->voicePortalScope = null;
        return $this;
    }
}

