<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DirectRouteReplacementIdentityList
 *
 * A replacement list of direct route parameters.
 *
 * @Groups [{"id":"4e1b40cd187e65e0dc647394b1e74e3c:113","type":"sequence","children":[{"id":"4e1b40cd187e65e0dc647394b1e74e3c:114","type":"choice","optional":true}]}]
 */
class DirectRouteReplacementIdentityList
{

    /**
     * @ElementName dtgIdentity
     * @Type string
     * @Group 4e1b40cd187e65e0dc647394b1e74e3c:114
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $dtgIdentity = null;

    /**
     * @ElementName trunkIdentity
     * @Type string
     * @Group 4e1b40cd187e65e0dc647394b1e74e3c:114
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $trunkIdentity = null;

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

