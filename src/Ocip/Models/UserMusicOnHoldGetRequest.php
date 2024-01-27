<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldGetRequest
 *
 * Request the user level data associated with Music On Hold.
 *         The response is either a UserMusicOnHoldGetResponse or an
 *         ErrorResponse.
 *
 * @see UserMusicOnHoldGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"3a0309eb8d406fefc891f554ef114669:246","type":"sequence"}]
 */
class UserMusicOnHoldGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 3a0309eb8d406fefc891f554ef114669:246
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

