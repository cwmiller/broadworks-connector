<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupSettingsAdd
 *
 * A service provider's or enterprise's voice messaging settings used in the context of add.
 *
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:7184","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupSettingsAdd
{

    /**
     * @ElementName deliveryFromAddress
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7184
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $deliveryFromAddress = null;

    /**
     * @ElementName notificationFromAddress
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7184
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $notificationFromAddress = null;

    /**
     * @ElementName voicePortalLockoutFromAddress
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7184
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $voicePortalLockoutFromAddress = null;

    /**
     * @ElementName useSystemDefaultDeliveryFromAddress
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7184
     * @var bool|null
     */
    private $useSystemDefaultDeliveryFromAddress = null;

    /**
     * @ElementName useSystemDefaultNotificationFromAddress
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7184
     * @var bool|null
     */
    private $useSystemDefaultNotificationFromAddress = null;

    /**
     * @ElementName useSystemDefaultVoicePortalLockoutFromAddress
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7184
     * @var bool|null
     */
    private $useSystemDefaultVoicePortalLockoutFromAddress = null;

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

