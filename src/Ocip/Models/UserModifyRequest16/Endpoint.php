<?php

namespace CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest16;

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
     * @ElementName trunkAddressing
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingModify|null
     */
    private $trunkAddressing = null;

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
     * Getter for trunkAddressing
     *
     * @ElementName trunkAddressing
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingModify|null
     */
    public function getTrunkAddressing()
    {
        return $this->trunkAddressing;
    }

    /**
     * Setter for trunkAddressing
     *
     * @ElementName trunkAddressing
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingModify|null $trunkAddressing
     * @return $this
     */
    public function setTrunkAddressing($trunkAddressing)
    {
        $this->trunkAddressing = $trunkAddressing;
        return $this;
    }


}

