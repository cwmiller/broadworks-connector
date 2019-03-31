<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrepaidGetRequest
 *
 * Request the user level data associated with Prepaid.
 *         The response is either a UserPrepaidGetResponse or an
 *         ErrorResponse.
 *
 * @see UserPrepaidGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ec793b9c4e032de7b751034d58c39dd1:42","type":"sequence"}]
 */
class UserPrepaidGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ec793b9c4e032de7b751034d58c39dd1:42
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

