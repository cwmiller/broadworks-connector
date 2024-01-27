<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityGetRequest
 *
 * Get the service provider BroadWorks Mobility service settings.
 *         The response is either a ServiceProviderBroadWorksMobilityGetResponse or an ErrorResponse.
 *         Replaced by: ServiceProviderBroadWorksMobilityGetRequest19sp1
 *
 * @see ServiceProviderBroadWorksMobilityGetResponse
 * @see ErrorResponse
 * @see ServiceProviderBroadWorksMobilityGetRequest19sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:17817","type":"sequence"}]
 */
class ServiceProviderBroadWorksMobilityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17817
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

