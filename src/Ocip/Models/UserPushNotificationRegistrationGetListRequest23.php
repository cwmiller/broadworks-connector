<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationGetListRequest23
 *
 * Request a list of all of the push notification registrations for a user by 
 *         either registration id or user id.
 *         The response is either UserPushNotificationRegistrationGetListResponse23 or ErrorResponse.
 *
 * @see UserPushNotificationRegistrationGetListResponse23
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3487","type":"sequence","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:3488","type":"choice"}]}]
 */
class UserPushNotificationRegistrationGetListRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName registrationId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3488
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $registrationId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3488
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * Getter for registrationId
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->registrationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationId;
    }

    /**
     * Setter for registrationId
     *
     * @param string $registrationId
     * @return $this
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationId()
    {
        $this->registrationId = null;
        return $this;
    }

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

