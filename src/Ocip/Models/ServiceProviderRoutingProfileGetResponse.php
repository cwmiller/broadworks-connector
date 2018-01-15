<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutingProfileGetResponse
 *
 * Response to ServiceProviderRoutingProfileGetRequest.
 */
class ServiceProviderRoutingProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingProfile
     * @var string|null
     */
    private $routingProfile = null;

    /**
     * Getter for routingProfile
     *
     * @ElementName routingProfile
     * @return string|null
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile;
    }

    /**
     * Setter for routingProfile
     *
     * @ElementName routingProfile
     * @param string|null $routingProfile
     * @return $this
     */
    public function setRoutingProfile($routingProfile)
    {
        $this->routingProfile = $routingProfile;
        return $this;
    }


}

