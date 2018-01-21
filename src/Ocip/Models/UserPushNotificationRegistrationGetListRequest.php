<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationGetListRequest
 *
 * Request a table containing all of the push notification registrations for a user
 * by 
 *         either registration id or user id.
 *         The response is either UserPushNotificationRegistrationGetListResponse
 * or ErrorResponse.
 */
class UserPushNotificationRegistrationGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName registrationId
     * @var string|null
     */
    private $registrationId = null;

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for registrationId
     *
     * @ElementName registrationId
     * @return string|null
     */
    public function getRegistrationId()
    {
        return $this->registrationId;
    }

    /**
     * Setter for registrationId
     *
     * @ElementName registrationId
     * @param string|null $registrationId
     * @return $this
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;
        return $this;
    }

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

