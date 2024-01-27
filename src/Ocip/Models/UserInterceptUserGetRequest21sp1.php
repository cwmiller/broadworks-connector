<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetRequest21sp1
 *
 * Get the user's intercept user service settings.
 *         The response is either a UserInterceptUserGetResponse21sp1 or an ErrorResponse.
 *
 * @see UserInterceptUserGetResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"2a762bb9361e88044885b796c1d6b979:268","type":"sequence"}]
 */
class UserInterceptUserGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 2a762bb9361e88044885b796c1d6b979:268
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

