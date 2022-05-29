<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetResponse
 *
 * Response to ServiceProviderVoiceMessagingGroupGetRequest.
 *         Contains the service provider's or enterprise's voice messaging settings.
 *
 * @see ServiceProviderVoiceMessagingGroupGetRequest
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:390","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deliveryFromAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:390
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $deliveryFromAddress = null;

    /**
     * @ElementName notificationFromAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:390
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $notificationFromAddress = null;

    /**
     * @ElementName voicePortalLockoutFromAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:390
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $voicePortalLockoutFromAddress = null;

    /**
     * @ElementName useSystemDefaultDeliveryFromAddress
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:390
     * @var bool|null
     */
    protected $useSystemDefaultDeliveryFromAddress = null;

    /**
     * @ElementName useSystemDefaultNotificationFromAddress
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:390
     * @var bool|null
     */
    protected $useSystemDefaultNotificationFromAddress = null;

    /**
     * @ElementName useSystemDefaultVoicePortalLockoutFromAddress
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:390
     * @var bool|null
     */
    protected $useSystemDefaultVoicePortalLockoutFromAddress = null;

    /**
     * Getter for deliveryFromAddress
     *
     * @return string
     */
    public function getDeliveryFromAddress()
    {
        return $this->deliveryFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deliveryFromAddress;
    }

    /**
     * Setter for deliveryFromAddress
     *
     * @param string $deliveryFromAddress
     * @return $this
     */
    public function setDeliveryFromAddress($deliveryFromAddress)
    {
        $this->deliveryFromAddress = $deliveryFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeliveryFromAddress()
    {
        $this->deliveryFromAddress = null;
        return $this;
    }

    /**
     * Getter for notificationFromAddress
     *
     * @return string
     */
    public function getNotificationFromAddress()
    {
        return $this->notificationFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notificationFromAddress;
    }

    /**
     * Setter for notificationFromAddress
     *
     * @param string $notificationFromAddress
     * @return $this
     */
    public function setNotificationFromAddress($notificationFromAddress)
    {
        $this->notificationFromAddress = $notificationFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNotificationFromAddress()
    {
        $this->notificationFromAddress = null;
        return $this;
    }

    /**
     * Getter for voicePortalLockoutFromAddress
     *
     * @return string
     */
    public function getVoicePortalLockoutFromAddress()
    {
        return $this->voicePortalLockoutFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalLockoutFromAddress;
    }

    /**
     * Setter for voicePortalLockoutFromAddress
     *
     * @param string $voicePortalLockoutFromAddress
     * @return $this
     */
    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress)
    {
        $this->voicePortalLockoutFromAddress = $voicePortalLockoutFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalLockoutFromAddress()
    {
        $this->voicePortalLockoutFromAddress = null;
        return $this;
    }

    /**
     * Getter for useSystemDefaultDeliveryFromAddress
     *
     * @return bool
     */
    public function getUseSystemDefaultDeliveryFromAddress()
    {
        return $this->useSystemDefaultDeliveryFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultDeliveryFromAddress;
    }

    /**
     * Setter for useSystemDefaultDeliveryFromAddress
     *
     * @param bool $useSystemDefaultDeliveryFromAddress
     * @return $this
     */
    public function setUseSystemDefaultDeliveryFromAddress($useSystemDefaultDeliveryFromAddress)
    {
        $this->useSystemDefaultDeliveryFromAddress = $useSystemDefaultDeliveryFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultDeliveryFromAddress()
    {
        $this->useSystemDefaultDeliveryFromAddress = null;
        return $this;
    }

    /**
     * Getter for useSystemDefaultNotificationFromAddress
     *
     * @return bool
     */
    public function getUseSystemDefaultNotificationFromAddress()
    {
        return $this->useSystemDefaultNotificationFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultNotificationFromAddress;
    }

    /**
     * Setter for useSystemDefaultNotificationFromAddress
     *
     * @param bool $useSystemDefaultNotificationFromAddress
     * @return $this
     */
    public function setUseSystemDefaultNotificationFromAddress($useSystemDefaultNotificationFromAddress)
    {
        $this->useSystemDefaultNotificationFromAddress = $useSystemDefaultNotificationFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultNotificationFromAddress()
    {
        $this->useSystemDefaultNotificationFromAddress = null;
        return $this;
    }

    /**
     * Getter for useSystemDefaultVoicePortalLockoutFromAddress
     *
     * @return bool
     */
    public function getUseSystemDefaultVoicePortalLockoutFromAddress()
    {
        return $this->useSystemDefaultVoicePortalLockoutFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultVoicePortalLockoutFromAddress;
    }

    /**
     * Setter for useSystemDefaultVoicePortalLockoutFromAddress
     *
     * @param bool $useSystemDefaultVoicePortalLockoutFromAddress
     * @return $this
     */
    public function setUseSystemDefaultVoicePortalLockoutFromAddress($useSystemDefaultVoicePortalLockoutFromAddress)
    {
        $this->useSystemDefaultVoicePortalLockoutFromAddress = $useSystemDefaultVoicePortalLockoutFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultVoicePortalLockoutFromAddress()
    {
        $this->useSystemDefaultVoicePortalLockoutFromAddress = null;
        return $this;
    }


}

