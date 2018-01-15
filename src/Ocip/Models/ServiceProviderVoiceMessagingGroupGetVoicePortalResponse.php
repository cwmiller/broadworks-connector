<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalResponse
 *
 * Response to ServiceProviderVoiceMessagingGroupGetVoicePortalRequest.
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalScope
     * @var string|null
     */
    private $voicePortalScope = null;

    /**
     * Getter for voicePortalScope
     *
     * @ElementName voicePortalScope
     * @return string|null
     */
    public function getVoicePortalScope()
    {
        return $this->voicePortalScope;
    }

    /**
     * Setter for voicePortalScope
     *
     * @ElementName voicePortalScope
     * @param string|null $voicePortalScope
     * @return $this
     */
    public function setVoicePortalScope($voicePortalScope)
    {
        $this->voicePortalScope = $voicePortalScope;
        return $this;
    }


}

