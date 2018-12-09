<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UnboundedPositiveInt
 *
 * Unbounded Quantity. Can either be unlimited or a positive int quantity.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:3917","type":"choice"}]
 */
class UnboundedPositiveInt
{

    /**
     * @ElementName unlimited
     * @Type bool
     * @Group 8e629edbac315ae7889caca732382c44:3917
     * @var bool|null
     */
    private $unlimited = null;

    /**
     * @ElementName quantity
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:3917
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

