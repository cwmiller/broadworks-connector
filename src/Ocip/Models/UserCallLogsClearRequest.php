<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallLogsClearRequest
 *
 * Clear a user's call logs associated with Basic Call Logs and Enhanced
 *         Call Logs features.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserCallLogsClearRequest14sp4
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserCallLogsClearRequest14sp4
 */
class UserCallLogsClearRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

