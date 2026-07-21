<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldUserGetRequest16
 *
 * Request the user level data associated with Music On Hold User.
 *         The response is either a UserMusicOnHoldUserGetResponse16 or an ErrorResponse.
 *         
 *         Replaced by: UserMusicOnHoldUserGetRequest20 in AS data mode
 *         Replaced by: UserMusicOnHoldUserGetRequestXS in XS data mode
 *
 * @see UserMusicOnHoldUserGetResponse16
 * @see ErrorResponse
 * @see UserMusicOnHoldUserGetRequest20
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:50854","type":"sequence"}]
 */
class UserMusicOnHoldUserGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50854
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

