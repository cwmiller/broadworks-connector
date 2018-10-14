<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalResponse
 *
 * Response to ServiceProviderVoiceMessagingGroupGetVoicePortalRequest.
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalRequest
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalScope
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope|null
     */
    private $voicePortalScope = null;

    /**
     * Getter for voicePortalScope
     *
     * @ElementName voicePortalScope
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope|null
     */
    public function getVoicePortalScope()
    {
        return $this->voicePortalScope;
    }

    /**
     * Setter for voicePortalScope
     *
     * @ElementName voicePortalScope
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope|null $voicePortalScope
     * @return $this
     */
    public function setVoicePortalScope(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope $voicePortalScope)
    {
        $this->voicePortalScope = $voicePortalScope;
        return $this;
    }


}

