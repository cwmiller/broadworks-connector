<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceRead22V2ExternalSource
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3853","type":"sequence"}]
 */
class MusicOnHoldSourceRead22V2ExternalSource
{
    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3853
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22|null
     */
    protected $accessDeviceEndpoint = null;

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
}

