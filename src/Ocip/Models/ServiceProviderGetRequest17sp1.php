<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetRequest17sp1
 *
 * Get the profile for a service provider or enterprise.
 *         The response is either a ServiceProviderGetResponse17sp1 or an ErrorResponse.
 *         
 *         Replaced By: ServiceProviderGetRequest22
 *
 * @see ServiceProviderGetResponse17sp1
 * @see ErrorResponse
 * @see ServiceProviderGetRequest22
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:2752","type":"sequence"}]
 */
class ServiceProviderGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:2752
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

