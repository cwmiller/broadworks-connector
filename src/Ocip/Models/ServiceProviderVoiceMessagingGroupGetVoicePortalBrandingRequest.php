<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest
 *
 * Get the service provider's voice portal branding settings.
 *         The response is either a ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse or an ErrorResponse.
 *         Replaced By: ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse
 * @see ErrorResponse
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19941","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19941
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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

