<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceModifyExternalSource
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:49975","type":"sequence"}]
 */
class MusicOnHoldSourceModifyExternalSource
{
    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Group d8f04177e438f303b41c211e518706bf:49975
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $accessDeviceEndpoint = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        if ($accessDeviceEndpoint === null) {
            $this->accessDeviceEndpoint = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        }
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

