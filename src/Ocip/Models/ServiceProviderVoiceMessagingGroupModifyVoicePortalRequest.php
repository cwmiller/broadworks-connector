<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest
 *
 * Request to change the service provider's or enterprise's voice portal settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:520","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:520
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName voicePortalScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:520
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope|null
     */
    private $voicePortalScope = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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

