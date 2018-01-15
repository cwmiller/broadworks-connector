<?php

namespace CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21;

/**
 * ExternalSource
 */
class ExternalSource
{

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }


}

