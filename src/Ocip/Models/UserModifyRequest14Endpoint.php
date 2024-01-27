<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest14Endpoint
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:45960","type":"choice"}]
 */
class UserModifyRequest14Endpoint
{
    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Group d8f04177e438f303b41c211e518706bf:45960
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify
     * @Group d8f04177e438f303b41c211e518706bf:45960
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null
     */
    protected $trunkGroupDeviceEndpoint = null;

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
     * Getter for trunkGroupDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify $trunkGroupDeviceEndpoint
     * @return $this
     */
    public function setTrunkGroupDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify $trunkGroupDeviceEndpoint)
    {
        $this->trunkGroupDeviceEndpoint = $trunkGroupDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupDeviceEndpoint()
    {
        $this->trunkGroupDeviceEndpoint = null;
        return $this;
    }
}

