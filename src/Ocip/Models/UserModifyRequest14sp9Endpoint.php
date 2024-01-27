<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest14sp9Endpoint
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46008","type":"choice"}]
 */
class UserModifyRequest14sp9Endpoint
{
    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Group d8f04177e438f303b41c211e518706bf:46008
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingModify
     * @Group d8f04177e438f303b41c211e518706bf:46008
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingModify|null
     */
    protected $trunkAddressing = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $accessDeviceEndpoint)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingModify
     */
    public function getTrunkAddressing()
    {
        return $this->trunkAddressing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkAddressing;
    }

    /**
     * Setter for trunkAddressing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingModify $trunkAddressing
     * @return $this
     */
    public function setTrunkAddressing(\CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingModify $trunkAddressing)
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

