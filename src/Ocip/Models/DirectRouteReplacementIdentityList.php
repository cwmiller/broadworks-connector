<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DirectRouteReplacementIdentityList
 *
 * A replacement list of direct route parameters.
 *
 * @Groups [{"id":"a23ada2e46d8597752a0a7f9f0e59f98:113","type":"sequence","children":[{"id":"a23ada2e46d8597752a0a7f9f0e59f98:114","type":"choice","optional":true}]}]
 */
class DirectRouteReplacementIdentityList
{

    /**
     * @ElementName dtgIdentity
     * @Type string
     * @Group a23ada2e46d8597752a0a7f9f0e59f98:114
     * @var string|null
     */
    private $dtgIdentity = null;

    /**
     * @ElementName trunkIdentity
     * @Type string
     * @Group a23ada2e46d8597752a0a7f9f0e59f98:114
     * @var string|null
     */
    private $trunkIdentity = null;

    /**
     * Getter for dtgIdentity
     *
     * @return string
     */
    public function getDtgIdentity()
    {
        return $this->dtgIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dtgIdentity;
    }

    /**
     * Setter for dtgIdentity
     *
     * @param string $dtgIdentity
     * @return $this
     */
    public function setDtgIdentity($dtgIdentity)
    {
        $this->dtgIdentity = $dtgIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDtgIdentity()
    {
        $this->dtgIdentity = null;
        return $this;
    }

    /**
     * Getter for trunkIdentity
     *
     * @return string
     */
    public function getTrunkIdentity()
    {
        return $this->trunkIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkIdentity;
    }

    /**
     * Setter for trunkIdentity
     *
     * @param string $trunkIdentity
     * @return $this
     */
    public function setTrunkIdentity($trunkIdentity)
    {
        $this->trunkIdentity = $trunkIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkIdentity()
    {
        $this->trunkIdentity = null;
        return $this;
    }


}

