<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNumberDeliveryGetRequest
 *
 * Request the user level data associated with Calling
 *         Name Delivery. 
 *         The response is either a UserCallingNumberDeliveryGetResponse or an ErrorResponse.
 *
 * @see UserCallingNumberDeliveryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"38ec4da6ddf415ad78a6ce9d97cf9c52:44","type":"sequence"}]
 */
class UserCallingNumberDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 38ec4da6ddf415ad78a6ce9d97cf9c52:44
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

