<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetInstanceResponse
 *
 * Response to GroupFindMeFollowMeGetInstanceRequest.
 *         Contains the service profile information.
 *         Replaced by: GroupFindMeFollowMeGetInstanceResponse19sp1
 *
 * @see GroupFindMeFollowMeGetInstanceRequest
 * @see GroupFindMeFollowMeGetInstanceResponse19sp1
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:8344","type":"sequence"}]
 */
class GroupFindMeFollowMeGetInstanceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17sp4
     * @Group 1a79c7896cb04feac6eff47a5321756e:8344
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17sp4|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:8344
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17sp4
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17sp4 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17sp4 $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }


}

