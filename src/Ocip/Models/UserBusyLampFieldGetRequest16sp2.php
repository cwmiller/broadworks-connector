<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBusyLampFieldGetRequest16sp2
 *
 * Request the settings for the busy lamp field service.
 *         The response is either a UserBusyLampFieldGetResponse16sp2 or an
 * ErrorResponse.
 */
class UserBusyLampFieldGetRequest16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

