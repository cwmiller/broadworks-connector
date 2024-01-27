<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetRequest17sp1
 *
 * Get the profile for a service provider or enterprise.
 *         The response is either a ServiceProviderGetResponse17sp1 or an ErrorResponse.
 *         
 *         Replaced by: ServiceProviderGetRequest22.
 *
 * @see ServiceProviderGetResponse17sp1
 * @see ErrorResponse
 * @see ServiceProviderGetRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19374","type":"sequence"}]
 */
class ServiceProviderGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19374
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

