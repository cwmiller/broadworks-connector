<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConsolidatedModifyRequest22Endpoint
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1494","type":"choice"}]
 */
class UserConsolidatedModifyRequest22Endpoint
{
    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1494
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1494
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify|null
     */
    protected $trunkAddressing = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify $accessDeviceEndpoint)
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

