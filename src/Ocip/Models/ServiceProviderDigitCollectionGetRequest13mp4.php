<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDigitCollectionGetRequest13mp4
 *
 * Request the service provider's digit collection attributes.
 *         The response is either a ServiceProviderDigitCollectionGetResponse13mp4 or an ErrorResponse.
 *
 * @see ServiceProviderDigitCollectionGetResponse13mp4
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3812","type":"sequence"}]
 */
class ServiceProviderDigitCollectionGetRequest13mp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:3812
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

