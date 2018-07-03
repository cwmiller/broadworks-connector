<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16
 *
 * Get the service provider's voice portal branding settings.
 *         The response is either a
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16 or an
 * ErrorResponse.
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16
 * @see ErrorResponse
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

