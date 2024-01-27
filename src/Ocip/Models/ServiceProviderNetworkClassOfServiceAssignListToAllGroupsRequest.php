<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceAssignListToAllGroupsRequest
 *
 * Assign a list of Network Classes of Service to all groups with in a 
 *         service provider. If it is the first assigned Network Class of Service in 
 *         the group, it will be set as the default one.
 *         The Network Classes of Service must be currently
 *         assigned to the service provider. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5015","type":"sequence"}]
 */
class ServiceProviderNetworkClassOfServiceAssignListToAllGroupsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5015
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Group e19a9072c2dad499e9f28837da5768db:5015
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $networkClassOfService = [
        
    ];

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
}

