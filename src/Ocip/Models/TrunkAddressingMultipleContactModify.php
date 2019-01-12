<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkAddressingMultipleContactModify
 *
 * Trunk group endpoint that can have multiple contacts. 
 *         alternateTrunkIdentityDomain is only used in XS mode and the AS when deployed in IMS mode.
 *         Setting alternateTrunkIdentity or alternateTrunkIdentityDomain to nil in XS mode, the other one paremter should be set to nil at the same time.
 *         The following elements are only used in AS data mode and are ignored in XS data mode:        
 *          physicalLocation
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4035","type":"sequence"}]
 */
class TrunkAddressingMultipleContactModify
{

    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointModify
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4035
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $trunkGroupDeviceEndpoint = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4035
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName alternateTrunkIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4035
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alternateTrunkIdentity = null;

    /**
     * @ElementName alternateTrunkIdentityDomain
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4035
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alternateTrunkIdentityDomain = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4035
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $physicalLocation = null;

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointModify|null
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointModify|null $trunkGroupDeviceEndpoint
     * @return $this
     */
    public function setTrunkGroupDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointModify $trunkGroupDeviceEndpoint)
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

    /**
     * Getter for alternateTrunkIdentityDomain
     *
     * @return string|null
     */
    public function getAlternateTrunkIdentityDomain()
    {
        return $this->alternateTrunkIdentityDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateTrunkIdentityDomain;
    }

    /**
     * Setter for alternateTrunkIdentityDomain
     *
     * @param string|null $alternateTrunkIdentityDomain
     * @return $this
     */
    public function setAlternateTrunkIdentityDomain($alternateTrunkIdentityDomain)
    {
        if ($alternateTrunkIdentityDomain === null) {
            $this->alternateTrunkIdentityDomain = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->alternateTrunkIdentityDomain = $alternateTrunkIdentityDomain;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateTrunkIdentityDomain()
    {
        $this->alternateTrunkIdentityDomain = null;
        return $this;
    }

    /**
     * Getter for physicalLocation
     *
     * @return string|null
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string|null $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation($physicalLocation)
    {
        if ($physicalLocation === null) {
            $this->physicalLocation = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->physicalLocation = $physicalLocation;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhysicalLocation()
    {
        $this->physicalLocation = null;
        return $this;
    }


}

