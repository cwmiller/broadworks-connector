<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceExternalLineIDDeliveryInfo
 *
 * This is the configuration parameters for External Line ID Delivery service
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4249","type":"sequence"}]
 */
class ProfileAndServiceExternalLineIDDeliveryInfo
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4249
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

