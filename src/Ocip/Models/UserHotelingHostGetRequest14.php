<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingHostGetRequest14
 *
 * Request the user level data associated with Hoteling Host.
 *         The response is either a UserHotelingHostGetResponse14 or an ErrorResponse.
 *         Replaced by: UserHotelingHostGetRequest14sp4
 *
 * @see UserHotelingHostGetResponse14
 * @see ErrorResponse
 * @see UserHotelingHostGetRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:44783","type":"sequence"}]
 */
class UserHotelingHostGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44783
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

