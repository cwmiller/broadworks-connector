<?php

namespace CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify16;

/**
 * ExternalSource
 */
class ExternalSource
{

    /**
     * @ElementName accessDeviceEndpoint
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDeviceEndpoint = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }


}

