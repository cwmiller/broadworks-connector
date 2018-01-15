<?php

namespace CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest17sp4;

/**
 * Endpoint
 */
class Endpoint
{

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify|null
     */
    private $trunkAddressing = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null $accessDeviceEndpoint
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify|null
     */
    public function getTrunkAddressing()
    {
        return $this->trunkAddressing;
    }

    /**
     * Setter for trunkAddressing
     *
     * @ElementName trunkAddressing
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify|null $trunkAddressing
     * @return $this
     */
    public function setTrunkAddressing($trunkAddressing)
    {
        $this->trunkAddressing = $trunkAddressing;
        return $this;
    }


}

