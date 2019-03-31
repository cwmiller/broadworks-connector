<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupNightForwardingGetRequest
 *
 * Request to get the Group Night Forwarding user parameters.
 *         The response is either UserGroupNightForwardingGetResponse or ErrorResponse.
 *
 * @see UserGroupNightForwardingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1a3849774e8d2ffd90c3a2c57cbdd7a0:148","type":"sequence"}]
 */
class UserGroupNightForwardingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1a3849774e8d2ffd90c3a2c57cbdd7a0:148
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

