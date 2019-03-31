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
 * @Groups [{"id":"e085a89bb45835a6ffd3de9dd7df0e49:44","type":"sequence"}]
 */
class UserCallForwardingAlwaysSecondaryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e085a89bb45835a6ffd3de9dd7df0e49:44
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

