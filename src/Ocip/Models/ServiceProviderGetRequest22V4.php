<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetRequest22V4
 *
 * Get the profile for a service provider or enterprise.
 *         The response is either a ServiceProviderGetResponse22V4 or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           serviceProviderExtenalId
 *
 * @see ServiceProviderGetResponse22V4
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4550","type":"sequence","children":[{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4551","type":"choice"}]}]
 */
class ServiceProviderGetRequest22V4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4551
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName serviceProviderExternalId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4551
     * @MaxLength 36
     * @var string|null
     */
    private $serviceProviderExternalId = null;

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

    /**
     * Getter for serviceProviderExternalId
     *
     * @return string
     */
    public function getServiceProviderExternalId()
    {
        return $this->serviceProviderExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderExternalId;
    }

    /**
     * Setter for serviceProviderExternalId
     *
     * @param string $serviceProviderExternalId
     * @return $this
     */
    public function setServiceProviderExternalId($serviceProviderExternalId)
    {
        $this->serviceProviderExternalId = $serviceProviderExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderExternalId()
    {
        $this->serviceProviderExternalId = null;
        return $this;
    }


}

