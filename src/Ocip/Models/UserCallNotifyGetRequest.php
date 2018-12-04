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
 * @Groups [{"id":"23795cc8a851f0b06c683fee78a45964:176","type":"sequence"}]
 */
class UserCallNotifyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 23795cc8a851f0b06c683fee78a45964:176
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

