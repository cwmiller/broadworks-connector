<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetRequest22V3
 *
 * Get the profile for a service provider or enterprise.
 *         The response is either a ServiceProviderGetResponse22V3 or an ErrorResponse.
 *         Replaced by: ServiceProviderGetRequest22V4 in AS data mode.
 *
 * @see ServiceProviderGetResponse22V3
 * @see ErrorResponse
 * @see ServiceProviderGetRequest22V4
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6747","type":"sequence"}]
 */
class ServiceProviderGetRequest22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6747
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

