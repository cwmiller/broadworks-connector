<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCallingLineIDDeliveryBlockingInfo
 *
 * This is the configuration parameters for Calling Line ID Delivery Blocking service
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4317","type":"sequence"}]
 */
class ProfileAndServiceCallingLineIDDeliveryBlockingInfo
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4317
     * @var bool|null
     */
    protected $isActive = null;

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

