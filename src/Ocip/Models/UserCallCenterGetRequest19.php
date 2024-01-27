<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetRequest19
 *
 * Get the user's call center settings and the list of call centers the specified user belongs to.
 *         The response is either a UserCallCenterGetResponse19 or an ErrorResponse.
 *         
 *         Replaced by UserCallCenterGetRequest23.
 *
 * @see UserCallCenterGetResponse19
 * @see ErrorResponse
 * @see UserCallCenterGetRequest23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:16768","type":"sequence"}]
 */
class UserCallCenterGetRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:16768
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

