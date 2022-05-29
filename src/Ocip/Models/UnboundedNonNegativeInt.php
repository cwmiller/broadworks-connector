<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UnboundedNonNegativeInt
 *
 * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:5179","type":"choice"}]
 */
class UnboundedNonNegativeInt
{

    /**
     * @ElementName unlimited
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:5179
     * @var bool|null
     */
    protected $unlimited = null;

    /**
     * @ElementName quantity
     * @Type int
     * @Group c0d21ef9ba207c335d8347e5172fce1d:5179
     * @MinInclusive 0
     * @var int|null
     */
    protected $quantity = null;

    /**
     * Getter for unlimited
     *
     * @return bool
     */
    public function getUnlimited()
    {
        return $this->unlimited instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unlimited;
    }

    /**
     * Setter for unlimited
     *
     * @param bool $unlimited
     * @return $this
     */
    public function setUnlimited($unlimited)
    {
        $this->unlimited = $unlimited;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnlimited()
    {
        $this->unlimited = null;
        return $this;
    }

    /**
     * Getter for quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->quantity;
    }

    /**
     * Setter for quantity
     *
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQuantity()
    {
        $this->quantity = null;
        return $this;
    }


}

