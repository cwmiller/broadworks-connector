<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceAssignToAllUsersRequest
 *
 * Assign a Network Classes of Service to all users with in a 
 *         service provider. This will also assign the Network Class of Service
 *         to all the groups in the service provider if it is not assigned yet.
 *         If it is the first assigned Network Class of Service in the group, 
 *         it will be set as the default one.
 *         However, the Network Classes of Service must be currently assigned to 
 *         the service provider. The response is either a SuccessResponse or
 *        an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5038","type":"sequence"}]
 */
class ServiceProviderNetworkClassOfServiceAssignToAllUsersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5038
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5038
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

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
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
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
}

