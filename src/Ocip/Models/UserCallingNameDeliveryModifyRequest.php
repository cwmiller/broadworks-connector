<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameDeliveryModifyRequest
 *
 * Modify the user level data associated with Calling Name Delivery.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCallingNameDeliveryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActiveForExternalCalls
     * @Type bool
     * @var bool|null
     */
    private $isActiveForExternalCalls = null;

    /**
     * @ElementName isActiveForInternalCalls
     * @Type bool
     * @var bool|null
     */
    private $isActiveForInternalCalls = null;

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
     * Getter for isActiveForExternalCalls
     *
     * @return bool
     */
    public function getIsActiveForExternalCalls()
    {
        return $this->isActiveForExternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveForExternalCalls;
    }

    /**
     * Setter for isActiveForExternalCalls
     *
     * @param bool $isActiveForExternalCalls
     * @return $this
     */
    public function setIsActiveForExternalCalls($isActiveForExternalCalls)
    {
        $this->isActiveForExternalCalls = $isActiveForExternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveForExternalCalls()
    {
        $this->isActiveForExternalCalls = null;
        return $this;
    }

    /**
     * Getter for isActiveForInternalCalls
     *
     * @return bool
     */
    public function getIsActiveForInternalCalls()
    {
        return $this->isActiveForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveForInternalCalls;
    }

    /**
     * Setter for isActiveForInternalCalls
     *
     * @param bool $isActiveForInternalCalls
     * @return $this
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls)
    {
        $this->isActiveForInternalCalls = $isActiveForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveForInternalCalls()
    {
        $this->isActiveForInternalCalls = null;
        return $this;
    }


}

