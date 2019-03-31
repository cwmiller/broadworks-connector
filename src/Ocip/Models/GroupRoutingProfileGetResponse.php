<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutingProfileGetResponse
 *
 * Response to GroupRoutingProfileGetRequest.
 *
 * @see GroupRoutingProfileGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6267","type":"sequence"}]
 */
class GroupRoutingProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingProfile
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6267
     * @MinLength 4
     * @MaxLength 12
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

