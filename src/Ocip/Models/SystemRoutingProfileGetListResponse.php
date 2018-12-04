<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingProfileGetListResponse
 *
 * Response to SystemRoutingProfileGetListRequest.
 *         Returns a list of routing profiles defined in the system.
 *
 * @see SystemRoutingProfileGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:13669","type":"sequence"}]
 */
class SystemRoutingProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingProfile
     * @Type string
     * @Array
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:13669
     * @var string[]
     */
    private $routingProfile = array(
        
    );

    /**
     * Getter for routingProfile
     *
     * @return string[]
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingProfile;
    }

    /**
     * Setter for routingProfile
     *
     * @param string[] $routingProfile
     * @return $this
     */
    public function setRoutingProfile(array $routingProfile)
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

    /**
     * Adder for routingProfile
     *
     * @param string $routingProfile
     * @return $this
     */
    public function addRoutingProfile(string $routingProfile)
    {
        $this->routingProfile[] = $routingProfile;
        return $this;
    }


}

