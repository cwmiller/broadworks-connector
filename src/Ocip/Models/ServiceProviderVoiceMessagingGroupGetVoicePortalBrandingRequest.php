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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:16763","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:16763
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

