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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

