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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $trunkGroupDeviceEndpoint = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName alternateTrunkIdentity
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alternateTrunkIdentity = null;

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify|null $trunkGroupDeviceEndpoint
     * @return $this
     */
    public function setTrunkGroupDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointModify $trunkGroupDeviceEndpoint)
    {
        if ($trunkGroupDeviceEndpoint === null) {
            $this->trunkGroupDeviceEndpoint = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->trunkGroupDeviceEndpoint = $trunkGroupDeviceEndpoint;
        }
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

    /**
     * Getter for enterpriseTrunkName
     *
     * @return string|null
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @param string|null $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        if ($enterpriseTrunkName === null) {
            $this->enterpriseTrunkName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->enterpriseTrunkName = $enterpriseTrunkName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseTrunkName()
    {
        $this->enterpriseTrunkName = null;
        return $this;
    }

    /**
     * Getter for alternateTrunkIdentity
     *
     * @return string|null
     */
    public function getAlternateTrunkIdentity()
    {
        return $this->alternateTrunkIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateTrunkIdentity;
    }

    /**
     * Setter for alternateTrunkIdentity
     *
     * @param string|null $alternateTrunkIdentity
     * @return $this
     */
    public function setAlternateTrunkIdentity($alternateTrunkIdentity)
    {
        if ($alternateTrunkIdentity === null) {
            $this->alternateTrunkIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->alternateTrunkIdentity = $alternateTrunkIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateTrunkIdentity()
    {
        $this->alternateTrunkIdentity = null;
        return $this;
    }


}

