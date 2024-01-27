<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreAlertingAnnouncementGetRequest
 *
 * Get the user's pre-alerting service setting.
 *         The response is either a UserPreAlertingAnnouncementGetResponse or an ErrorResponse.
 *         
 *         Replaced by: UserPreAlertingAnnouncementGetRequest20 in AS data mode
 *
 * @see UserPreAlertingAnnouncementGetResponse
 * @see ErrorResponse
 * @see UserPreAlertingAnnouncementGetRequest20
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18573","type":"sequence"}]
 */
class UserPreAlertingAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:18573
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

