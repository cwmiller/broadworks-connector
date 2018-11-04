<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkAddressingModify
 *
 * Trunk group endpoint.
 */
class TrunkAddressingModify
{

    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $trunkGroupDeviceEndpoint = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName alternateTrunkIdentity
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alternateTrunkIdentity = null;

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @ElementName trunkGroupDeviceEndpoint
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @ElementName trunkGroupDeviceEndpoint
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil $trunkGroupDeviceEndpoint
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $enterpriseTrunkName
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAlternateTrunkIdentity()
    {
        return $this->alternateTrunkIdentity;
    }

    /**
     * Setter for alternateTrunkIdentity
     *
     * @ElementName alternateTrunkIdentity
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $alternateTrunkIdentity
     * @return $this
     */
    public function setAlternateTrunkIdentity($alternateTrunkIdentity)
    {
        $this->alternateTrunkIdentity = $alternateTrunkIdentity;
        return $this;
    }


}

