<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutingProfileGetResponse
 *
 * Response to ServiceProviderRoutingProfileGetRequest.
 *
 * @see ServiceProviderRoutingProfileGetRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4783","type":"sequence"}]
 */
class ServiceProviderRoutingProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingProfile
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4783
     * @var string|null
     */
    private $routingProfile = null;

    /**
     * Getter for routingProfile
     *
     * @return string
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingProfile;
    }

    /**
     * Setter for routingProfile
     *
     * @param string $routingProfile
     * @return $this
     */
    public function setRoutingProfile($routingProfile)
    {
        $this->routingProfile = $routingProfile;
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

