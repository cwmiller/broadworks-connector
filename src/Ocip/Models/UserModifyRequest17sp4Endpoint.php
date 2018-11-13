<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest17sp4Endpoint
 */
class UserModifyRequest17sp4Endpoint
{

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify|null
     */
    private $trunkAddressing = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify $accessDeviceEndpoint)
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
     * Getter for trunkAddressing
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify
     */
    public function getTrunkAddressing()
    {
        return $this->trunkAddressing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkAddressing;
    }

    /**
     * Setter for trunkAddressing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify $trunkAddressing
     * @return $this
     */
    public function setTrunkAddressing(\CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify $trunkAddressing)
    {
        $this->trunkAddressing = $trunkAddressing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkAddressing()
    {
        $this->trunkAddressing = null;
        return $this;
    }


}

