<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallLogsClearRequest
 *
 * Clear a user's call logs associated with Basic Call Logs and Enhanced
 *                 Call Logs features.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Replaced By: UserCallLogsClearRequest14sp4
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserCallLogsClearRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6907","type":"sequence"}]
 */
class UserCallLogsClearRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6907
     * @MinLength 1
     * @MaxLength 161
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

