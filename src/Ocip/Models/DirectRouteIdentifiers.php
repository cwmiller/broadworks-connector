<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DirectRouteIdentifiers
 *
 * Direct Route identifiers.
 *
 * @Groups [{"id":"a78f4eda2a1b6844d5a0639c6940a98f:99","type":"sequence","children":[{"id":"a78f4eda2a1b6844d5a0639c6940a98f:100","type":"choice"}]}]
 */
class DirectRouteIdentifiers
{

    /**
     * @ElementName dtgIdentity
     * @Type string
     * @Group a78f4eda2a1b6844d5a0639c6940a98f:100
     * @var string|null
     */
    private $dtgIdentity = null;

    /**
     * @ElementName trunkIdentity
     * @Type string
     * @Group a78f4eda2a1b6844d5a0639c6940a98f:100
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

