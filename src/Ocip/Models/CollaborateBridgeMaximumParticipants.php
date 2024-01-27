<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateBridgeMaximumParticipants
 *
 * Maximum number of Collaborate bridge participants. Can either be unlimited or limited to a value between 3 and 999999.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1153","type":"choice"}]
 */
class CollaborateBridgeMaximumParticipants
{
    /**
     * @ElementName unlimited
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1153
     * @var bool|null
     */
    protected $unlimited = null;

    /**
     * @ElementName quantity
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1153
     * @MinInclusive 3
     * @MaxInclusive 999999
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

