<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallParkGetRequest
 *
 * Identifies which Call Park group the user belongs to if any and the list of users in the group.
 *         The response is either UserCallParkGetResponse or ErrorResponse.
 *
 * @see UserCallParkGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"b6fd73d148b9b309dce1d2f04516ddfa:543","type":"sequence"}]
 */
class UserCallParkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:543
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

