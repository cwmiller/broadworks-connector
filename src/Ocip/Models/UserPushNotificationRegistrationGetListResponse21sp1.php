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
 * @see UserPushNotificationRegistrationGetListRequest21sp1
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3506","type":"sequence"}]
 */
class UserPushNotificationRegistrationGetListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3506
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
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3506
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData[]
     */
    protected $pushNotificationRegistrationData = array(
        
    );

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

