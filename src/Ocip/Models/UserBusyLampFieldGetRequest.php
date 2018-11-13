<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBusyLampFieldGetRequest
 *
 * Request the settings for the busy lamp field service.
 *         The response is either a UserBusyLampFieldGetResponse or an
 * ErrorResponse.
 *         Replaced by: UserBusyLampFieldGetRequest16sp2
 *
 * @see UserBusyLampFieldGetResponse
 * @see ErrorResponse
 * @see UserBusyLampFieldGetRequest16sp2
 */
class UserBusyLampFieldGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

