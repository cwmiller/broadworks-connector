<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldUserGetRequest20
 *
 * Request the user level data associated with Music On Hold User.
 *         The response is either a UserMusicOnHoldUserGetResponse20 or an ErrorResponse.
 *
 * @see UserMusicOnHoldUserGetResponse20
 * @see ErrorResponse
 * @Groups [{"id":"66fe518a637c74cc4b2c97aa7f68fc49:287","type":"sequence"}]
 */
class UserMusicOnHoldUserGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 66fe518a637c74cc4b2c97aa7f68fc49:287
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

