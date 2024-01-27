<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkAddressingMultipleContactAdd22
 *
 * Trunk group endpoint that can have multiple contacts.
 *         alternateTrunkIdentityDomain is only used in XS mode and the AS when deployed in IMS mode. 
 *         Both alternateTrunkIdentity and AlternateTrunkIdentityDomain should be set at the same time if one is set in XS mode.
 *         The following elements are only used in AS data mode and are ignored in XS data mode:        
 *          physicalLocation
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5314","type":"sequence"}]
 */
class TrunkAddressingMultipleContactAdd22
{
    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointAdd22
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5314
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointAdd22|null
     */
    protected $trunkGroupDeviceEndpoint = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5314
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseTrunkName = null;

    /**
     * @ElementName alternateTrunkIdentity
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5314
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $alternateTrunkIdentity = null;

    /**
     * @ElementName alternateTrunkIdentityDomain
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5314
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $alternateTrunkIdentityDomain = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5314
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $physicalLocation = null;

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointAdd22
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointAdd22 $trunkGroupDeviceEndpoint
     * @return $this
     */
    public function setTrunkGroupDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointAdd22 $trunkGroupDeviceEndpoint)
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

    /**
     * Getter for alternateTrunkIdentityDomain
     *
     * @return string
     */
    public function getAlternateTrunkIdentityDomain()
    {
        return $this->alternateTrunkIdentityDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateTrunkIdentityDomain;
    }

    /**
     * Setter for alternateTrunkIdentityDomain
     *
     * @param string $alternateTrunkIdentityDomain
     * @return $this
     */
    public function setAlternateTrunkIdentityDomain($alternateTrunkIdentityDomain)
    {
        $this->alternateTrunkIdentityDomain = $alternateTrunkIdentityDomain;
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
     * @return string
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation($physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
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

