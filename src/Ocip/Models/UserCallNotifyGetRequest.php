<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallNotifyGetRequest
 *
 * Get the user's call notify service setting.
 *         The response is either a UserCallNotifyGetResponse or an ErrorResponse.
 *
 * @see UserCallNotifyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"023f6ec367b65a7f37f7a30e155f1985:176","type":"sequence"}]
 */
class UserCallNotifyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 023f6ec367b65a7f37f7a30e155f1985:176
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

