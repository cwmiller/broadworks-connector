<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutingProfileGetResponse
 *
 * Response to GroupRoutingProfileGetRequest.
 *
 * @see GroupRoutingProfileGetRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7023","type":"sequence"}]
 */
class GroupRoutingProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName routingProfile
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:7023
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

