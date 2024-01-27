<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BCCTMaxConnections
 *
 * Maximum number of BCCT Server Connections.
 *         Can either be unlimited or a bounded int quantity.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:919","type":"choice"}]
 */
class BCCTMaxConnections
{
    /**
     * @ElementName unlimited
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:919
     * @var bool|null
     */
    protected $unlimited = null;

    /**
     * @ElementName quantity
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:919
     * @MinInclusive 1
     * @MaxInclusive 65535
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

