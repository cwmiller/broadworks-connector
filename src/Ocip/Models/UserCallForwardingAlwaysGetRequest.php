<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingAlwaysGetRequest
 *
 * Request the user level data associated with Call Forwarding Always.
 *         The response is either a UserCallForwardingAlwaysGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallForwardingAlwaysGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"97105b92fc80f353d25e39a7ecc8e22f:44","type":"sequence"}]
 */
class UserCallForwardingAlwaysGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 97105b92fc80f353d25e39a7ecc8e22f:44
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

