<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallParkGetRequest
 *
 * Identifies which Call Park group the user belongs to if any and the list of users in the group.
 *         The response is either UserCallParkGetResponse or ErrorResponse.
 *
 * @see UserCallParkGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7a925e891158dfa3cb1319e045608894:543","type":"sequence"}]
 */
class UserCallParkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 7a925e891158dfa3cb1319e045608894:543
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

