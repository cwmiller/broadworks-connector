<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetRequest
 *
 * Requests the service provider's or enterprise's voice messaging settings.
 *         The response is either ServiceProviderVoiceMessagingGroupGetResponse or ErrorResponse.
 *
 * @see ServiceProviderVoiceMessagingGroupGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"80c5986946137c505e41f6008c7f75a8:318","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 80c5986946137c505e41f6008c7f75a8:318
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

