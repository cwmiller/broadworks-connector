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
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActiveForExternalCalls
     * @var bool|null
     */
    private $isActiveForExternalCalls = null;

    /**
     * @ElementName isActiveForInternalCalls
     * @var bool|null
     */
    private $isActiveForInternalCalls = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for isActiveForExternalCalls
     *
     * @ElementName isActiveForExternalCalls
     * @return bool|null
     */
    public function getIsActiveForExternalCalls()
    {
        return $this->isActiveForExternalCalls;
    }

    /**
     * Setter for isActiveForExternalCalls
     *
     * @ElementName isActiveForExternalCalls
     * @param bool|null $isActiveForExternalCalls
     * @return $this
     */
    public function setIsActiveForExternalCalls($isActiveForExternalCalls)
    {
        $this->isActiveForExternalCalls = $isActiveForExternalCalls;
        return $this;
    }

    /**
     * Getter for isActiveForInternalCalls
     *
     * @ElementName isActiveForInternalCalls
     * @return bool|null
     */
    public function getIsActiveForInternalCalls()
    {
        return $this->isActiveForInternalCalls;
    }

    /**
     * Setter for isActiveForInternalCalls
     *
     * @ElementName isActiveForInternalCalls
     * @param bool|null $isActiveForInternalCalls
     * @return $this
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls)
    {
        $this->isActiveForInternalCalls = $isActiveForInternalCalls;
        return $this;
    }


}

