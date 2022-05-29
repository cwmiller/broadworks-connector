<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCallWaitingInfo
 *
 * This is the configuration parameters for Call Transfer service
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4352","type":"sequence"}]
 */
class ProfileAndServiceCallWaitingInfo
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4352
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName disableCallingLineIdDelivery
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4352
     * @var bool|null
     */
    protected $disableCallingLineIdDelivery = null;

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

    /**
     * Getter for disableCallingLineIdDelivery
     *
     * @return bool
     */
    public function getDisableCallingLineIdDelivery()
    {
        return $this->disableCallingLineIdDelivery instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableCallingLineIdDelivery;
    }

    /**
     * Setter for disableCallingLineIdDelivery
     *
     * @param bool $disableCallingLineIdDelivery
     * @return $this
     */
    public function setDisableCallingLineIdDelivery($disableCallingLineIdDelivery)
    {
        $this->disableCallingLineIdDelivery = $disableCallingLineIdDelivery;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableCallingLineIdDelivery()
    {
        $this->disableCallingLineIdDelivery = null;
        return $this;
    }


}

