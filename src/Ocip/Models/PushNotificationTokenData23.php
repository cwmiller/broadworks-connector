<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PushNotificationTokenData23
 *
 * The common push notification token elements.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4059","type":"sequence"}]
 */
class PushNotificationTokenData23
{
    /**
     * @ElementName pushNotificationToken
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4059
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $pushNotificationToken = null;

    /**
     * @ElementName pushNotificationType
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4059
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $pushNotificationType = null;

    /**
     * @ElementName pushNotificationEventData
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData23
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4059
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData23[]
     */
    protected $pushNotificationEventData = [
        
    ];

    /**
     * Getter for pushNotificationToken
     *
     * @return string
     */
    public function getPushNotificationToken()
    {
        return $this->pushNotificationToken instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationToken;
    }

    /**
     * Setter for pushNotificationToken
     *
     * @param string $pushNotificationToken
     * @return $this
     */
    public function setPushNotificationToken($pushNotificationToken)
    {
        $this->pushNotificationToken = $pushNotificationToken;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationToken()
    {
        $this->pushNotificationToken = null;
        return $this;
    }

    /**
     * Getter for pushNotificationType
     *
     * @return string
     */
    public function getPushNotificationType()
    {
        return $this->pushNotificationType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationType;
    }

    /**
     * Setter for pushNotificationType
     *
     * @param string $pushNotificationType
     * @return $this
     */
    public function setPushNotificationType($pushNotificationType)
    {
        $this->pushNotificationType = $pushNotificationType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationType()
    {
        $this->pushNotificationType = null;
        return $this;
    }

    /**
     * Getter for pushNotificationEventData
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData23[]
     */
    public function getPushNotificationEventData()
    {
        return $this->pushNotificationEventData instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationEventData;
    }

    /**
     * Setter for pushNotificationEventData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData23[] $pushNotificationEventData
     * @return $this
     */
    public function setPushNotificationEventData(array $pushNotificationEventData)
    {
        $this->pushNotificationEventData = $pushNotificationEventData;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationEventData()
    {
        $this->pushNotificationEventData = null;
        return $this;
    }

    /**
     * Adder for pushNotificationEventData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData23 $pushNotificationEventData
     * @return $this
     */
    public function addPushNotificationEventData($pushNotificationEventData)
    {
        $this->pushNotificationEventData[] = $pushNotificationEventData;
        return $this;
    }
}

