<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGetInstanceResponse
 *
 * Response to GroupFlexibleSeatingHostGetInstanceRequest.
 *         Contains the service profile and access device information.
 *
 * @see GroupFlexibleSeatingHostGetInstanceRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:10044","type":"sequence"}]
 */
class GroupFlexibleSeatingHostGetInstanceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     * @Group d8f04177e438f303b41c211e518706bf:10044
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName defaultAlias
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:10044
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $defaultAlias = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead20
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:10044
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead20|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:10044
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile)
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
     * Getter for defaultAlias
     *
     * @return string
     */
    public function getDefaultAlias()
    {
        return $this->defaultAlias instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAlias;
    }

    /**
     * Setter for defaultAlias
     *
     * @param string $defaultAlias
     * @return $this
     */
    public function setDefaultAlias($defaultAlias)
    {
        $this->defaultAlias = $defaultAlias;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultAlias()
    {
        $this->defaultAlias = null;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead20
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead20 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead20 $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceEndpoint()
    {
        $this->accessDeviceEndpoint = null;
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

