<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBusyLampFieldGetRequest16sp2
 *
 * Request the settings for the busy lamp field service.
 *         The response is either a UserBusyLampFieldGetResponse16sp2 or an ErrorResponse.
 *
 * @see UserBusyLampFieldGetResponse16sp2
 * @see ErrorResponse
 * @Groups [{"id":"4faeca417998d23ce2ff6b0b43212aa6:161","type":"sequence"}]
 */
class UserBusyLampFieldGetRequest16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:161
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

