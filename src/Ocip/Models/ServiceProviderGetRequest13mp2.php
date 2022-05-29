<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetRequest13mp2
 *
 * Get the profile for a service provider or enterprise.
 *         The response is either a ServiceProviderGetResponse13mp2 or an ErrorResponse.
 *         
 *         Replaced by: ServiceProviderGetRequest17sp1
 *
 * @see ServiceProviderGetResponse13mp2
 * @see ErrorResponse
 * @see ServiceProviderGetRequest17sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:18780","type":"sequence"}]
 */
class ServiceProviderGetRequest13mp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18780
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

