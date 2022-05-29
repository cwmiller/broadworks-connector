<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallWaitingGetResponse17sp4
 *
 * Response to UserCallWaitingGetRequest17sp4.
 *         
 *         The following elements are only used in AS data mode:
 *           disableCallingLineIdDelivery
 *
 * @see UserCallWaitingGetRequest17sp4
 * @Groups [{"id":"e12337fe0480db757507a0699bc195d9:108","type":"sequence"}]
 */
class UserCallWaitingGetResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group e12337fe0480db757507a0699bc195d9:108
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName disableCallingLineIdDelivery
     * @Type bool
     * @Group e12337fe0480db757507a0699bc195d9:108
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

