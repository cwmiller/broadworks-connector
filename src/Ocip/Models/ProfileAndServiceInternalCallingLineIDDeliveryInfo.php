<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceInternalCallingLineIDDeliveryInfo
 *
 * This is the configuration parameters for Internal Calling Line ID Delivery service
 *
 * @Groups [{"id":"489b2153267470be8e945bf6b778e0d0:3662","type":"sequence"}]
 */
class ProfileAndServiceInternalCallingLineIDDeliveryInfo
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 489b2153267470be8e945bf6b778e0d0:3662
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

