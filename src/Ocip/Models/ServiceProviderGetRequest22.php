<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetRequest22
 *
 * Get the profile for a service provider or enterprise.
 *         The response is either a ServiceProviderGetResponse22 or an ErrorResponse.
 *         
 *         Replaced by ServiceProviderGetRequest22V2 in AS data mode.
 *
 * @see ServiceProviderGetResponse22
 * @see ErrorResponse
 * @see ServiceProviderGetRequest22V2
 * @Groups [{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:479","type":"sequence"}]
 */
class ServiceProviderGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:479
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

