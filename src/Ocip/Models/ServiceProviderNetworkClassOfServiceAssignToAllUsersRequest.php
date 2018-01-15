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
 */
class ServiceProviderNetworkClassOfServiceAssignToAllUsersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }


}

