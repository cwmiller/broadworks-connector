<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingAlwaysSecondaryGetRequest
 *
 * Request the user level data associated with Call Forwarding Always Secondary service.
 *         The response is either a UserCallForwardingAlwaysSecondaryGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallForwardingAlwaysSecondaryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1deb5ba62a17faee2c6485bf47cec6d9:44","type":"sequence"}]
 */
class UserCallForwardingAlwaysSecondaryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1deb5ba62a17faee2c6485bf47cec6d9:44
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

