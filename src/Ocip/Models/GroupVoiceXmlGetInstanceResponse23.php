<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceXmlGetInstanceResponse23
 *
 * Response to GroupVoiceXmlGetInstanceRequest23.
 *         Contains the service profile information and possibly access device information.
 *         Replaced by: GroupVoiceXmlGetInstanceResponse24
 *
 * @see GroupVoiceXmlGetInstanceRequest23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:5328","type":"sequence"}]
 */
class GroupVoiceXmlGetInstanceResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     * @Group 240b50f54d060859e5e275082fdf49f9:5328
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:5328
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:5328
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName webexMeetingCallback
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:5328
     * @var bool|null
     */
    protected $webexMeetingCallback = null;

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

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22 $accessDeviceEndpoint)
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
     * Getter for webexMeetingCallback
     *
     * @return bool
     */
    public function getWebexMeetingCallback()
    {
        return $this->webexMeetingCallback instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webexMeetingCallback;
    }

    /**
     * Setter for webexMeetingCallback
     *
     * @param bool $webexMeetingCallback
     * @return $this
     */
    public function setWebexMeetingCallback($webexMeetingCallback)
    {
        $this->webexMeetingCallback = $webexMeetingCallback;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebexMeetingCallback()
    {
        $this->webexMeetingCallback = null;
        return $this;
    }
}

