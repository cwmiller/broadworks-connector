<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest
 *
 * Get the service provider's voice portal branding settings.
 *         The response is either a
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse or an
 * ErrorResponse.
 *         Replaced By:
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse
 * @see ErrorResponse
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

