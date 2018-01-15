<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalRequest
 *
 * Requests the service provider's or enterprise's voice portal settings.
 *         The response is either
 * ServiceProviderVoiceMessagingGroupGetVoicePortalResponse or ErrorResponse.
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

