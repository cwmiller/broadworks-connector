<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PushNotificationEventData
 *
 * The common push notification event elements.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:50213","type":"sequence"}]
 */
class PushNotificationEventData
{
    /**
     * @ElementName eventName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50213
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $eventName = null;

    /**
     * @ElementName silent
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:50213
     * @var bool|null
     */
    protected $silent = null;

    /**
     * @ElementName mutableContent
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:50213
     * @var bool|null
     */
    protected $mutableContent = null;

    /**
     * @ElementName pushNotificationEventParameters
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50213
     * @MinLength 1
     * @MaxLength 5899
     * @var string|null
     */
    protected $pushNotificationEventParameters = null;

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
}

