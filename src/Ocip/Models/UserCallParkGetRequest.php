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
 * @Groups [{"id":"bcea7a1f459e3e037da541b681a13f82:326","type":"sequence"}]
 */
class UserCallParkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group bcea7a1f459e3e037da541b681a13f82:326
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

