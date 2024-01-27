<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallWaitingModifyRequest
 *
 * Modify the user level data associated with Call Waiting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           disableCallingLineIdDelivery
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"08ee5b5ec09321975436b908fd540e7f:128","type":"sequence"}]
 */
class UserCallWaitingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 08ee5b5ec09321975436b908fd540e7f:128
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 08ee5b5ec09321975436b908fd540e7f:128
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName disableCallingLineIdDelivery
     * @Type bool
     * @Optional
     * @Group 08ee5b5ec09321975436b908fd540e7f:128
     * @var bool|null
     */
    protected $disableCallingLineIdDelivery = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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

