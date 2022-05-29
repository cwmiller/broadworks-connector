<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetRequest22
 *
 * Get the profile for a service provider or enterprise.
 *         The response is either a ServiceProviderGetResponse22 or an ErrorResponse.
 *         
 *         Replaced by ServiceProviderGetRequest22V2.
 *
 * @see ServiceProviderGetResponse22
 * @see ErrorResponse
 * @see ServiceProviderGetRequest22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:18816","type":"sequence"}]
 */
class ServiceProviderGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18816
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

