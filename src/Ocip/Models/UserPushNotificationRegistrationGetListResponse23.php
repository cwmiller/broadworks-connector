<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationGetListResponse23
 *
 * Response to UserPushNotificationRegistrationGetListRequest23.
 *         
 *         A registration has more than one row in the response when the registration includes more than one token
 *         and/or one or more event.  There can be one more tokens per registration ID and there can be one or more
 *         events per token. 
 *         
 *         Registration Date uses the format "yyyy-MM-dd'T'HH:mm:ss.SSSZ" in the time zone of the requested user.
 *         Example: 2010-10-01T09:30:00:000-0400.
 *
 * @see UserPushNotificationRegistrationGetListRequest23
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3512","type":"sequence"}]
 */
class UserPushNotificationRegistrationGetListResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3512
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName pushNotificationRegistrationData
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData23
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3512
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData23[]
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData23[]
     */
    public function getPushNotificationRegistrationData()
    {
        return $this->pushNotificationRegistrationData instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationRegistrationData;
    }

    /**
     * Setter for pushNotificationRegistrationData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData23[] $pushNotificationRegistrationData
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationRegistrationData23 $pushNotificationRegistrationData
     * @return $this
     */
    public function addPushNotificationRegistrationData($pushNotificationRegistrationData)
    {
        $this->pushNotificationRegistrationData[] = $pushNotificationRegistrationData;
        return $this;
    }
}

