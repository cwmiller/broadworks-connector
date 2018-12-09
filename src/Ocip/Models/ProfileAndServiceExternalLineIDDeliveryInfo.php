<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceExternalLineIDDeliveryInfo
 *
 * This is the configuration parameters for External Line ID Delivery service
 *
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:3651","type":"sequence"}]
 */
class ProfileAndServiceExternalLineIDDeliveryInfo
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:3651
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

