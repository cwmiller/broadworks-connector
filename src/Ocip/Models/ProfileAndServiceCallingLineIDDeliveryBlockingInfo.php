<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCallingLineIDDeliveryBlockingInfo
 *
 * This is the configuration parameters for Calling Line ID Delivery Blocking service
 *
 * @Groups [{"id":"489b2153267470be8e945bf6b778e0d0:3526","type":"sequence"}]
 */
class ProfileAndServiceCallingLineIDDeliveryBlockingInfo
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 489b2153267470be8e945bf6b778e0d0:3526
     * @var bool|null
     */
    private $isActive = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }


}

