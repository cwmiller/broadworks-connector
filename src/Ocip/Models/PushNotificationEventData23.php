<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PushNotificationEventData23
 *
 * The common push notification event elements.
 *         The mobileNumber element is only returned for MOBILE_CALL_INFO events.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4021","type":"sequence"}]
 */
class PushNotificationEventData23
{
    /**
     * @ElementName eventName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4021
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $eventName = null;

    /**
     * @ElementName silent
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4021
     * @var bool|null
     */
    protected $silent = null;

    /**
     * @ElementName mutableContent
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4021
     * @var bool|null
     */
    protected $mutableContent = null;

    /**
     * @ElementName pushNotificationEventParameters
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4021
     * @MinLength 1
     * @MaxLength 5899
     * @var string|null
     */
    protected $pushNotificationEventParameters = null;

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4021
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $mobileNumber = null;

    /**
     * Getter for eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventName;
    }

    /**
     * Setter for eventName
     *
     * @param string $eventName
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEventName()
    {
        $this->eventName = null;
        return $this;
    }

    /**
     * Getter for silent
     *
     * @return bool
     */
    public function getSilent()
    {
        return $this->silent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->silent;
    }

    /**
     * Setter for silent
     *
     * @param bool $silent
     * @return $this
     */
    public function setSilent($silent)
    {
        $this->silent = $silent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSilent()
    {
        $this->silent = null;
        return $this;
    }

    /**
     * Getter for mutableContent
     *
     * @return bool
     */
    public function getMutableContent()
    {
        return $this->mutableContent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mutableContent;
    }

    /**
     * Setter for mutableContent
     *
     * @param bool $mutableContent
     * @return $this
     */
    public function setMutableContent($mutableContent)
    {
        $this->mutableContent = $mutableContent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMutableContent()
    {
        $this->mutableContent = null;
        return $this;
    }

    /**
     * Getter for pushNotificationEventParameters
     *
     * @return string
     */
    public function getPushNotificationEventParameters()
    {
        return $this->pushNotificationEventParameters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationEventParameters;
    }

    /**
     * Setter for pushNotificationEventParameters
     *
     * @param string $pushNotificationEventParameters
     * @return $this
     */
    public function setPushNotificationEventParameters($pushNotificationEventParameters)
    {
        $this->pushNotificationEventParameters = $pushNotificationEventParameters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationEventParameters()
    {
        $this->pushNotificationEventParameters = null;
        return $this;
    }

    /**
     * Getter for mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @param string $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNumber()
    {
        $this->mobileNumber = null;
        return $this;
    }
}

