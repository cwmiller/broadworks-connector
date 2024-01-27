<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingProfileGetListResponse
 *
 * Response to SystemRoutingProfileGetListRequest.
 *         Returns a list of routing profiles defined in the system.
 *
 * @see SystemRoutingProfileGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15727","type":"sequence"}]
 */
class SystemRoutingProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName routingProfile
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:15727
     * @MinLength 4
     * @MaxLength 12
     * @var string[]
     */
    protected $routingProfile = [
        
    ];

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

