<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UnboundedPositiveInt
 *
 * Unbounded Quantity. Can either be unlimited or a positive int quantity.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4502","type":"choice"}]
 */
class UnboundedPositiveInt
{

    /**
     * @ElementName unlimited
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4502
     * @var bool|null
     */
    private $unlimited = null;

    /**
     * @ElementName quantity
     * @Type int
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4502
     * @MinInclusive 1
     * @var int|null
     */
    private $quantity = null;

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

