<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallNotifyGetRequest
 *
 * Get the user's call notify service setting.
 *         The response is either a UserCallNotifyGetResponse or an ErrorResponse.
 *
 * @see UserCallNotifyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"26f62134ab1693f4bdddc7c70b20d2eb:228","type":"sequence"}]
 */
class UserCallNotifyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 26f62134ab1693f4bdddc7c70b20d2eb:228
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

