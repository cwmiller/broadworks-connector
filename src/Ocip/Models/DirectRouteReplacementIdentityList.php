<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DirectRouteReplacementIdentityList
 *
 * A replacement list of direct route parameters.
 */
class DirectRouteReplacementIdentityList
{

    /**
     * @ElementName dtgIdentity
     * @var string|null
     */
    private $dtgIdentity = null;

    /**
     * @ElementName trunkIdentity
     * @var string|null
     */
    private $trunkIdentity = null;

    /**
     * Getter for dtgIdentity
     *
     * @ElementName dtgIdentity
     * @return string|null
     */
    public function getDtgIdentity()
    {
        return $this->dtgIdentity;
    }

    /**
     * Setter for dtgIdentity
     *
     * @ElementName dtgIdentity
     * @param string|null $dtgIdentity
     * @return $this
     */
    public function setDtgIdentity($dtgIdentity)
    {
        $this->dtgIdentity = $dtgIdentity;
        return $this;
    }

    /**
     * Getter for trunkIdentity
     *
     * @ElementName trunkIdentity
     * @return string|null
     */
    public function getTrunkIdentity()
    {
        return $this->trunkIdentity;
    }

    /**
     * Setter for trunkIdentity
     *
     * @ElementName trunkIdentity
     * @param string|null $trunkIdentity
     * @return $this
     */
    public function setTrunkIdentity($trunkIdentity)
    {
        $this->trunkIdentity = $trunkIdentity;
        return $this;
    }


}

