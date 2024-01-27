<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest22Endpoint
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2573","type":"choice"}]
 */
class UserModifyRequest22Endpoint
{
    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify22
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2573
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify22|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify22
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2573
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify22|null
     */
    protected $trunkAddressing = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify22
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify22 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointModify22 $accessDeviceEndpoint)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify22
     */
    public function getTrunkAddressing()
    {
        return $this->trunkAddressing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkAddressing;
    }

    /**
     * Setter for trunkAddressing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify22 $trunkAddressing
     * @return $this
     */
    public function setTrunkAddressing(\CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify22 $trunkAddressing)
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

