<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetRequest
 *
 * Get the user's ACD state and the list of call centers the specified user belongs to.
 *         The response is either a UserCallCenterGetResponse or an ErrorResponse.
 *         
 *         Replaced By: UserCallCenterGetRequest16
 *
 * @see UserCallCenterGetResponse
 * @see ErrorResponse
 * @see UserCallCenterGetRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:40317","type":"sequence"}]
 */
class UserCallCenterGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40317
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

