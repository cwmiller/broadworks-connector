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
     * @Type string
     * @var string|null
     */
    private $userId = null;

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


}

