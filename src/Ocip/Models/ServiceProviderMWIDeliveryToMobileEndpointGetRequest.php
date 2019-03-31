<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointGetRequest
 *
 * Request the service provider level data associated with MWI Delivery to Mobile Endpoint service.
 *         The response is either a ServiceProviderMWIDeliveryToMobileEndpointGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderMWIDeliveryToMobileEndpointGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"958b78cc2a785d78259c1e8a474eb40d:301","type":"sequence"}]
 */
class ServiceProviderMWIDeliveryToMobileEndpointGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 958b78cc2a785d78259c1e8a474eb40d:301
     * @MinLength 1
     * @MaxLength 30
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

