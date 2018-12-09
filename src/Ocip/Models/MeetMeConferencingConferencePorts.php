<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferencePorts
 *
 * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
 *
 * @Groups [{"id":"7a29c84abb8473449085e6657fc6948d:886","type":"choice"}]
 */
class MeetMeConferencingConferencePorts
{

    /**
     * @ElementName unlimited
     * @Type bool
     * @Group 7a29c84abb8473449085e6657fc6948d:886
     * @var bool|null
     */
    private $unlimited = null;

    /**
     * @ElementName quantity
     * @Type int
     * @Group 7a29c84abb8473449085e6657fc6948d:886
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

