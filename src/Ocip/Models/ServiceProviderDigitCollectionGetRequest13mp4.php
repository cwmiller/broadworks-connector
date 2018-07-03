<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDigitCollectionGetRequest13mp4
 *
 * Request the service provider's digit collection attributes.
 *         The response is either a ServiceProviderDigitCollectionGetResponse13mp4
 * or an ErrorResponse.
 *
 * @see ServiceProviderDigitCollectionGetResponse13mp4
 * @see ErrorResponse
 */
class ServiceProviderDigitCollectionGetRequest13mp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

