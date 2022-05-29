<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceUnassignListRequest
 *
 * Unassign a list of Network Classes of Service from a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By : ServiceProviderNetworkClassOfServiceUnassignListRequest21 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ServiceProviderNetworkClassOfServiceUnassignListRequest21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6092","type":"sequence"}]
 */
class ServiceProviderNetworkClassOfServiceUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:6092
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:6092
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $networkClassOfService = array(
        
    );

    /**
     * @ElementName defaultNetworkClassOfService
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:6092
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $defaultNetworkClassOfService = null;

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

