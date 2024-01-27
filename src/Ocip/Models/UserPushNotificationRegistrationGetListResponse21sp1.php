<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationGetListResponse21sp1
 *
 * Response to UserPushNotificationRegistrationGetListRequest21sp1.
 *         
 *         A registration has more than one row in the response when the registration includes more than one token
 *         and/or one or more event.  There can be one more tokens per registration ID and there can be one or more
 *         events per token.
 *         
 *         Registration Date uses the format "yyyy-MM-dd'T'HH:mm:ss.SSSZ" in the time zone of the requested user.
 *         Example: 2010-10-01T09:30:00:000-0400.
 *         
 *         Replaced by: UserPushNotificationRegistrationGetListResponse22
 *
 * @see UserPushNotificationRegistrationGetListRequest21sp1
 * @see UserPushNotificationRegistrationGetListResponse22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46514","type":"sequence"}]
 */
class UserPushNotificationRegistrationGetListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:46514
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName pushNotificationRegistrationData
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:46514
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData[]
     */
    protected $pushNotificationRegistrationData = [
        
    ];

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

    /**
     * Getter for pushNotificationRegistrationData
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData[]
     */
    public function getPushNotificationRegistrationData()
    {
        return $this->pushNotificationRegistrationData instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationRegistrationData;
    }

    /**
     * Setter for pushNotificationRegistrationData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData[] $pushNotificationRegistrationData
     * @return $this
     */
    public function setPushNotificationRegistrationData(array $pushNotificationRegistrationData)
    {
        $this->pushNotificationRegistrationData = $pushNotificationRegistrationData;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationRegistrationData()
    {
        $this->pushNotificationRegistrationData = null;
        return $this;
    }

    /**
     * Adder for pushNotificationRegistrationData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData $pushNotificationRegistrationData
     * @return $this
     */
    public function addPushNotificationRegistrationData($pushNotificationRegistrationData)
    {
        $this->pushNotificationRegistrationData[] = $pushNotificationRegistrationData;
        return $this;
    }
}

