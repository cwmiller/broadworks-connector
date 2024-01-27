<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DirectRouteIdentifiers
 *
 * Direct Route identifiers.
 *
 * @Groups [{"id":"448c1807ef39a1a06e7d8d4d16ecaa31:99","type":"sequence","children":[{"id":"448c1807ef39a1a06e7d8d4d16ecaa31:100","type":"choice"}]}]
 */
class DirectRouteIdentifiers
{
    /**
     * @ElementName dtgIdentity
     * @Type string
     * @Group 448c1807ef39a1a06e7d8d4d16ecaa31:100
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $dtgIdentity = null;

    /**
     * @ElementName trunkIdentity
     * @Type string
     * @Group 448c1807ef39a1a06e7d8d4d16ecaa31:100
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

