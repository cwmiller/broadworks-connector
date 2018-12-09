<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalRequest
 *
 * Requests the service provider's or enterprise's voice portal settings.
 *         The response is either ServiceProviderVoiceMessagingGroupGetVoicePortalResponse or ErrorResponse.
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalResponse
 * @see ErrorResponse
 * @Groups [{"id":"80c5986946137c505e41f6008c7f75a8:391","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 80c5986946137c505e41f6008c7f75a8:391
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

