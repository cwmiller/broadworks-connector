<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingNotReachableGetRequest
 *
 * Request the user level data associated with Call Forwarding Not Reachable.
 *         The response is either a UserCallForwardingNotReachableGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallForwardingNotReachableGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"894e3bfe658bf9c3ec06aa2fd09fdd43:44","type":"sequence"}]
 */
class UserCallForwardingNotReachableGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 894e3bfe658bf9c3ec06aa2fd09fdd43:44
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

