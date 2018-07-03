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
 */
class UserCallWaitingGetResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName disableCallingLineIdDelivery
     * @var bool|null
     */
    private $disableCallingLineIdDelivery = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for disableCallingLineIdDelivery
     *
     * @ElementName disableCallingLineIdDelivery
     * @return bool|null
     */
    public function getDisableCallingLineIdDelivery()
    {
        return $this->disableCallingLineIdDelivery;
    }

    /**
     * Setter for disableCallingLineIdDelivery
     *
     * @ElementName disableCallingLineIdDelivery
     * @param bool|null $disableCallingLineIdDelivery
     * @return $this
     */
    public function setDisableCallingLineIdDelivery($disableCallingLineIdDelivery)
    {
        $this->disableCallingLineIdDelivery = $disableCallingLineIdDelivery;
        return $this;
    }


}

