<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointGetRequest
 *
 * Request the service provider level data associated with MWI Delivery to Mobile
 * Endpoint service.
 *         The response is either a
 * ServiceProviderMWIDeliveryToMobileEndpointGetResponse or an ErrorResponse.
 */
class ServiceProviderMWIDeliveryToMobileEndpointGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

