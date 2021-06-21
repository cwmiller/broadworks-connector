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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5673","type":"sequence"}]
 */
class ServiceProviderDomainGetAssignedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5673
     * @MinLength 1
     * @MaxLength 30
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

