<?php

namespace CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14;

/**
 * Endpoint
 */
class Endpoint
{

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null
     */
    private $trunkGroupDeviceEndpoint = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @ElementName trunkGroupDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @ElementName trunkGroupDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null $trunkGroupDeviceEndpoint
     * @return $this
     */
    public function setTrunkGroupDeviceEndpoint($trunkGroupDeviceEndpoint)
    {
        $this->trunkGroupDeviceEndpoint = $trunkGroupDeviceEndpoint;
        return $this;
    }


}

