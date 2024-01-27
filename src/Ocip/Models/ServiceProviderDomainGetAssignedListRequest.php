<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDomainGetAssignedListRequest
 *
 * Requests the list of all matching domains assigned to a service provider .
 *         The response is either ServiceProviderDomainGetAssignedListResponse or ErrorResponse.
 *         
 *         Replaced by ServiceProviderDomainGetAssignedListRequest22.
 *
 * @see ServiceProviderDomainGetAssignedListResponse
 * @see ErrorResponse
 * @see ServiceProviderDomainGetAssignedListRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6642","type":"sequence"}]
 */
class ServiceProviderDomainGetAssignedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6642
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

