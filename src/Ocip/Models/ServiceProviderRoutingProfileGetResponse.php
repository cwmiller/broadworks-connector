<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutingProfileGetResponse
 *
 * Response to ServiceProviderRoutingProfileGetRequest.
 *
 * @see ServiceProviderRoutingProfileGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5678","type":"sequence"}]
 */
class ServiceProviderRoutingProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName routingProfile
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5678
     * @MinLength 4
     * @MaxLength 12
     * @var string|null
     */
    protected $routingProfile = null;

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

