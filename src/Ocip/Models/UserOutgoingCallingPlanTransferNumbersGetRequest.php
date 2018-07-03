<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanTransferNumbersGetRequest
 *
 * Request the transfer numbers for a user.
 *         The response is either a
 * UserOutgoingCallingPlanTransferNumbersGetResponse or an ErrorResponse.
 *
 * @see UserOutgoingCallingPlanTransferNumbersGetResponse
 * @see ErrorResponse
 */
class UserOutgoingCallingPlanTransferNumbersGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

