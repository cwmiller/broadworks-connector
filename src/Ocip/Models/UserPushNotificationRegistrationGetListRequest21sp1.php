<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationGetListRequest21sp1
 *
 * Request a list of all of the push notification registrations for a user by 
 *         either registration id or user id.
 *         The response is either UserPushNotificationRegistrationGetListResponse21sp1 or ErrorResponse.
 *         
 *         Replaced by: UserPushNotificationRegistrationGetListRequest22
 *
 * @see UserPushNotificationRegistrationGetListResponse21sp1
 * @see ErrorResponse
 * @see UserPushNotificationRegistrationGetListRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46439","type":"sequence","children":[{"id":"d8f04177e438f303b41c211e518706bf:46440","type":"choice"}]}]
 */
class UserPushNotificationRegistrationGetListRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName registrationId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:46440
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $registrationId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:46440
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

