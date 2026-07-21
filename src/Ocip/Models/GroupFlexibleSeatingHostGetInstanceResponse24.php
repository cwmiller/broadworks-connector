<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGetInstanceResponse24
 *
 * Response to GroupFlexibleSeatingHostGetInstanceRequest24.
 *         Contains the service profile and access device information.
 *
 * @see GroupFlexibleSeatingHostGetInstanceRequest24
 * @Groups [{"id":"1d4e390f8cd01ca6f92589024d74dac6:201","type":"sequence"}]
 */
class GroupFlexibleSeatingHostGetInstanceResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile24
     * @Group 1d4e390f8cd01ca6f92589024d74dac6:201
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile24|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName defaultAlias
     * @Type string
     * @Group 1d4e390f8cd01ca6f92589024d74dac6:201
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $defaultAlias = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22
     * @Optional
     * @Group 1d4e390f8cd01ca6f92589024d74dac6:201
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 1d4e390f8cd01ca6f92589024d74dac6:201
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile24
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile24 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile24 $serviceInstanceProfile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22 $accessDeviceEndpoint)
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

