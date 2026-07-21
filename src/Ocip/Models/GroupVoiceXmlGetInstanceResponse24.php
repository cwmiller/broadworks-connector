<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceXmlGetInstanceResponse24
 *
 * Response to GroupVoiceXmlGetInstanceRequest24.
 *         Contains the service profile information and possibly access device information.
 *
 * @see GroupVoiceXmlGetInstanceRequest24
 * @Groups [{"id":"f3e2fc6b9722da3741a8ba4a2c4a2d05:147","type":"sequence"}]
 */
class GroupVoiceXmlGetInstanceResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile24
     * @Group f3e2fc6b9722da3741a8ba4a2c4a2d05:147
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile24|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group f3e2fc6b9722da3741a8ba4a2c4a2d05:147
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     * @Optional
     * @Group f3e2fc6b9722da3741a8ba4a2c4a2d05:147
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName webexMeetingCallback
     * @Type bool
     * @Group f3e2fc6b9722da3741a8ba4a2c4a2d05:147
     * @var bool|null
     */
    protected $webexMeetingCallback = null;

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

