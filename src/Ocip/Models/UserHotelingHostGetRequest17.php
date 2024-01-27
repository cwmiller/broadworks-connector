<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingHostGetRequest17
 *
 * Request the user level data associated with Hoteling Host.
 *         The response is either a UserHotelingHostGetResponse17 or an ErrorResponse.
 *
 * @see UserHotelingHostGetResponse17
 * @see ErrorResponse
 * @Groups [{"id":"96ad5c8258c0a6b99bd479bf1924db05:41","type":"sequence"}]
 */
class UserHotelingHostGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 96ad5c8258c0a6b99bd479bf1924db05:41
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

