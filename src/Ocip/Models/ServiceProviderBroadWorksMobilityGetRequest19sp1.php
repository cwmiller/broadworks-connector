<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityGetRequest19sp1
 *
 * Get the service provider BroadWorks Mobility service settings.
 *         The response is either a ServiceProviderBroadWorksMobilityGetResponse19sp1 or an ErrorResponse.
 *         
 *         Replaced by: ServiceProviderBroadWorksMobilityGetRequest22 in AS data mode
 *
 * @see ServiceProviderBroadWorksMobilityGetResponse19sp1
 * @see ErrorResponse
 * @see ServiceProviderBroadWorksMobilityGetRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:17835","type":"sequence"}]
 */
class ServiceProviderBroadWorksMobilityGetRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17835
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

