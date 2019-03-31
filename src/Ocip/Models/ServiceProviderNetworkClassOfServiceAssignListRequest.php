<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceAssignListRequest
 *
 * Assign a list of Network Classes of Service to a service provider.
 *         The Element defaultNetworkClassOfService is required only
 *         for the first assignment,
 *         for subsequent assignments it is optional.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By : ServiceProviderNetworkClassOfServiceAssignListRequest21 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ServiceProviderNetworkClassOfServiceAssignListRequest21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2766","type":"sequence"}]
 */
class ServiceProviderNetworkClassOfServiceAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2766
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:2766
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    private $networkClassOfService = array(
        
    );

    /**
     * @ElementName defaultNetworkClassOfService
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:2766
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $defaultNetworkClassOfService = null;

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
     * Getter for networkClassOfService
     *
     * @return string[]
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string[] $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService(array $networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }

    /**
     * Adder for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function addNetworkClassOfService(string $networkClassOfService)
    {
        $this->networkClassOfService[] = $networkClassOfService;
        return $this;
    }

    /**
     * Getter for defaultNetworkClassOfService
     *
     * @return string
     */
    public function getDefaultNetworkClassOfService()
    {
        return $this->defaultNetworkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultNetworkClassOfService;
    }

    /**
     * Setter for defaultNetworkClassOfService
     *
     * @param string $defaultNetworkClassOfService
     * @return $this
     */
    public function setDefaultNetworkClassOfService($defaultNetworkClassOfService)
    {
        $this->defaultNetworkClassOfService = $defaultNetworkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultNetworkClassOfService()
    {
        $this->defaultNetworkClassOfService = null;
        return $this;
    }


}

