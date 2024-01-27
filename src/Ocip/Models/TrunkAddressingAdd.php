<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkAddressingAdd
 *
 * Trunk group endpoint.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5265","type":"sequence"}]
 */
class TrunkAddressingAdd
{
    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointAdd
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5265
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointAdd|null
     */
    protected $trunkGroupDeviceEndpoint = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5265
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseTrunkName = null;

    /**
     * @ElementName alternateTrunkIdentity
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5265
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $alternateTrunkIdentity = null;

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointAdd
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointAdd $trunkGroupDeviceEndpoint
     * @return $this
     */
    public function setTrunkGroupDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointAdd $trunkGroupDeviceEndpoint)
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

    /**
     * Getter for enterpriseTrunkName
     *
     * @return string
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @param string $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
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
     * @return string
     */
    public function getAlternateTrunkIdentity()
    {
        return $this->alternateTrunkIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateTrunkIdentity;
    }

    /**
     * Setter for alternateTrunkIdentity
     *
     * @param string $alternateTrunkIdentity
     * @return $this
     */
    public function setAlternateTrunkIdentity($alternateTrunkIdentity)
    {
        $this->alternateTrunkIdentity = $alternateTrunkIdentity;
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

