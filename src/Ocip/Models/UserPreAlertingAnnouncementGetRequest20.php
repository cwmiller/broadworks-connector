<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreAlertingAnnouncementGetRequest20
 *
 * Get the user's pre-alerting service setting.
 *         The response is either a UserPreAlertingAnnouncementGetResponse20 or an ErrorResponse.
 *
 * @see UserPreAlertingAnnouncementGetResponse20
 * @see ErrorResponse
 * @Groups [{"id":"89722c6a28e608e15bce28b0cd73fa11:255","type":"sequence"}]
 */
class UserPreAlertingAnnouncementGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 89722c6a28e608e15bce28b0cd73fa11:255
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

