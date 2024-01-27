<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest21Endpoint
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18404","type":"choice"}]
 */
class UserModifyRequest21Endpoint
{
    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify
     * @Group 240b50f54d060859e5e275082fdf49f9:18404
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify
     * @Group 240b50f54d060859e5e275082fdf49f9:18404
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify|null
     */
    protected $trunkAddressing = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify $accessDeviceEndpoint)
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

