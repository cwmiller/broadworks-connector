<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingProfileGetListResponse
 *
 * Response to SystemRoutingProfileGetListRequest.
 *         Returns a list of routing profiles defined in the system.
 *
 * @see SystemRoutingProfileGetListRequest
 */
class SystemRoutingProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingProfile
     * @var string[]
     */
    private $routingProfile = array(
        
    );

    /**
     * Getter for routingProfile
     *
     * @ElementName routingProfile
     * @return string[]
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile;
    }

    /**
     * Setter for routingProfile
     *
     * @ElementName routingProfile
     * @param string[] $routingProfile
     * @return $this
     */
    public function setRoutingProfile($routingProfile)
    {
        $this->routingProfile = $routingProfile;
        return $this;
    }

    /**
     * Adder for routingProfile
     *
     * @ElementName routingProfile
     * @param string $routingProfile
     * @return $this
     */
    public function addRoutingProfile($routingProfile)
    {
        $this->routingProfile []= $routingProfile;
        return $this;
    }


}

