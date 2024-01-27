<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceAdd16ExternalSource
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:49915","type":"sequence"}]
 */
class MusicOnHoldSourceAdd16ExternalSource
{
    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd
     * @Group d8f04177e438f303b41c211e518706bf:49915
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd $accessDeviceEndpoint)
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
}

