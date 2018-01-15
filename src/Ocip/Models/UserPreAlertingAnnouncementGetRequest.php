<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreAlertingAnnouncementGetRequest
 *
 * Get the user's pre-alerting service setting.
 *         The response is either a UserPreAlertingAnnouncementGetResponse or an
 * ErrorResponse.
 */
class UserPreAlertingAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

