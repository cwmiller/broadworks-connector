<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkAddressingMultipleContactAdd
 *
 * Trunk group endpoint that can have multiple contacts.
 *         alternateTrunkIdentityDomain is only used in IMS mode. 
 *         Both alternateTrunkIdentity and AlternateTrunkIdentityDomain should be
 * set at the same time if one is set in IMS mode.
 */
class TrunkAddressingMultipleContactAdd
{

    /**
     * @ElementName trunkGroupDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointAdd|null
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
     * @ElementName alternateTrunkIdentityDomain
     * @var string|null
     */
    private $alternateTrunkIdentityDomain = null;

    /**
     * Getter for trunkGroupDeviceEndpoint
     *
     * @ElementName trunkGroupDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointAdd|null
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint;
    }

    /**
     * Setter for trunkGroupDeviceEndpoint
     *
     * @ElementName trunkGroupDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupDeviceMultipleContactEndpointAdd|null $trunkGroupDeviceEndpoint
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

    /**
     * Getter for alternateTrunkIdentityDomain
     *
     * @ElementName alternateTrunkIdentityDomain
     * @return string|null
     */
    public function getAlternateTrunkIdentityDomain()
    {
        return $this->alternateTrunkIdentityDomain;
    }

    /**
     * Setter for alternateTrunkIdentityDomain
     *
     * @ElementName alternateTrunkIdentityDomain
     * @param string|null $alternateTrunkIdentityDomain
     * @return $this
     */
    public function setAlternateTrunkIdentityDomain($alternateTrunkIdentityDomain)
    {
        $this->alternateTrunkIdentityDomain = $alternateTrunkIdentityDomain;
        return $this;
    }


}

