<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetRequest16
 *
 * Get the user's intercept user service settings.
 *         The response is either a UserInterceptUserGetResponse16 or an ErrorResponse.
 *         Replaced By: UserInterceptUserGetRequest16sp1
 *
 * @see UserInterceptUserGetResponse16
 * @see ErrorResponse
 * @see UserInterceptUserGetRequest16sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:45551","type":"sequence"}]
 */
class UserInterceptUserGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:45551
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

