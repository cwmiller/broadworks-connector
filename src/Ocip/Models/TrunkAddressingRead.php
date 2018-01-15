<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkAddressingRead
 *
 * Trunk group endpoint.
 */
class TrunkAddressingRead
{

    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointRead14sp4|null
     */
    private $trunkGroupDeviceEndpoint = null;

    /**
     * @ElementName enterpriseTrunkName
     * @var string|null
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName alternateTrunkIdentity
     * @var string|null
     */
    private $alternateTrunkIdentity = null;

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @ElementName trunkGroupDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointRead14sp4|null
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @ElementName trunkGroupDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointRead14sp4|null $trunkGroupDeviceEndpoint
     * @return $this
     */
    public function setTrunkGroupDeviceEndpoint($trunkGroupDeviceEndpoint)
    {
        $this->trunkGroupDeviceEndpoint = $trunkGroupDeviceEndpoint;
        return $this;
    }

    /**
     * Getter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @return string|null
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @param string|null $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
        return $this;
    }

    /**
     * Getter for alternateTrunkIdentity
     *
     * @ElementName alternateTrunkIdentity
     * @return string|null
     */
    public function getAlternateTrunkIdentity()
    {
        return $this->alternateTrunkIdentity;
    }

    /**
     * Setter for alternateTrunkIdentity
     *
     * @ElementName alternateTrunkIdentity
     * @param string|null $alternateTrunkIdentity
     * @return $this
     */
    public function setAlternateTrunkIdentity($alternateTrunkIdentity)
    {
        $this->alternateTrunkIdentity = $alternateTrunkIdentity;
        return $this;
    }


}

