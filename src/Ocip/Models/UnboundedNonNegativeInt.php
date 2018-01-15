<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UnboundedNonNegativeInt
 *
 * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
 */
class UnboundedNonNegativeInt
{

    /**
     * @ElementName unlimited
     * @var bool|null
     */
    private $unlimited = null;

    /**
     * @ElementName quantity
     * @var int|null
     */
    private $quantity = null;

    /**
     * Getter for unlimited
     *
     * @ElementName unlimited
     * @return bool|null
     */
    public function getUnlimited()
    {
        return $this->unlimited;
    }

    /**
     * Setter for unlimited
     *
     * @ElementName unlimited
     * @param bool|null $unlimited
     * @return $this
     */
    public function setUnlimited($unlimited)
    {
        $this->unlimited = $unlimited;
        return $this;
    }

    /**
     * Getter for quantity
     *
     * @ElementName quantity
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Setter for quantity
     *
     * @ElementName quantity
     * @param int|null $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

