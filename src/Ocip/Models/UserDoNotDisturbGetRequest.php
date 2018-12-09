<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDoNotDisturbGetRequest
 *
 * Request the user level data associated with Do Not Disturb.
 *         The response is either a UserDoNotDisturbGetResponse or an
 *         ErrorResponse.
 *
 * @see UserDoNotDisturbGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"2ca660fa9785f46a407bf13c3354a5d7:42","type":"sequence"}]
 */
class UserDoNotDisturbGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 2ca660fa9785f46a407bf13c3354a5d7:42
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

