<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutingProfileGetResponse
 *
 * Response to GroupRoutingProfileGetRequest.
 *
 * @see GroupRoutingProfileGetRequest
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:6053","type":"sequence"}]
 */
class GroupRoutingProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingProfile
     * @Type string
     * @Optional
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:6053
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

