<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutingProfileModifyRequest
 *
 * Requests to modify the routing profile for a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:4601","type":"sequence"}]
 */
class ServiceProviderRoutingProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:4601
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName routingProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:4601
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $routingProfile = null;

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
     * Getter for routingProfile
     *
     * @return string|null
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingProfile;
    }

    /**
     * Setter for routingProfile
     *
     * @param string|null $routingProfile
     * @return $this
     */
    public function setRoutingProfile($routingProfile)
    {
        if ($routingProfile === null) {
            $this->routingProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->routingProfile = $routingProfile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingProfile()
    {
        $this->routingProfile = null;
        return $this;
    }


}

