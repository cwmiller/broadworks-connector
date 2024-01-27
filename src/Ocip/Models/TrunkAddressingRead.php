<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkAddressingRead
 *
 * Trunk group endpoint.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5420","type":"sequence"}]
 */
class TrunkAddressingRead
{
    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointRead14sp4
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5420
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointRead14sp4|null
     */
    protected $trunkGroupDeviceEndpoint = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5420
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseTrunkName = null;

    /**
     * @ElementName alternateTrunkIdentity
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5420
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $alternateTrunkIdentity = null;

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointRead14sp4
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointRead14sp4 $trunkGroupDeviceEndpoint
     * @return $this
     */
    public function setTrunkGroupDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceEndpointRead14sp4 $trunkGroupDeviceEndpoint)
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

