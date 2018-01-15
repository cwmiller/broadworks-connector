<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest
 *
 * Request to change the service provider's or enterprise's voice portal settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName voicePortalScope
     * @var string|null
     */
    private $voicePortalScope = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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

