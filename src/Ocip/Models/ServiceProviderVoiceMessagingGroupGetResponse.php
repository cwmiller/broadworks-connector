<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetResponse
 *
 * Response to ServiceProviderVoiceMessagingGroupGetRequest.
 *         Contains the service provider's or enterprise's voice messaging
 * settings.
 */
class ServiceProviderVoiceMessagingGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deliveryFromAddress
     * @var string|null
     */
    private $deliveryFromAddress = null;

    /**
     * @ElementName notificationFromAddress
     * @var string|null
     */
    private $notificationFromAddress = null;

    /**
     * @ElementName voicePortalLockoutFromAddress
     * @var string|null
     */
    private $voicePortalLockoutFromAddress = null;

    /**
     * @ElementName useSystemDefaultDeliveryFromAddress
     * @var bool|null
     */
    private $useSystemDefaultDeliveryFromAddress = null;

    /**
     * @ElementName useSystemDefaultNotificationFromAddress
     * @var bool|null
     */
    private $useSystemDefaultNotificationFromAddress = null;

    /**
     * @ElementName useSystemDefaultVoicePortalLockoutFromAddress
     * @var bool|null
     */
    private $useSystemDefaultVoicePortalLockoutFromAddress = null;

    /**
     * Getter for deliveryFromAddress
     *
     * @ElementName deliveryFromAddress
     * @return string|null
     */
    public function getDeliveryFromAddress()
    {
        return $this->deliveryFromAddress;
    }

    /**
     * Setter for deliveryFromAddress
     *
     * @ElementName deliveryFromAddress
     * @param string|null $deliveryFromAddress
     * @return $this
     */
    public function setDeliveryFromAddress($deliveryFromAddress)
    {
        $this->deliveryFromAddress = $deliveryFromAddress;
        return $this;
    }

    /**
     * Getter for notificationFromAddress
     *
     * @ElementName notificationFromAddress
     * @return string|null
     */
    public function getNotificationFromAddress()
    {
        return $this->notificationFromAddress;
    }

    /**
     * Setter for notificationFromAddress
     *
     * @ElementName notificationFromAddress
     * @param string|null $notificationFromAddress
     * @return $this
     */
    public function setNotificationFromAddress($notificationFromAddress)
    {
        $this->notificationFromAddress = $notificationFromAddress;
        return $this;
    }

    /**
     * Getter for voicePortalLockoutFromAddress
     *
     * @ElementName voicePortalLockoutFromAddress
     * @return string|null
     */
    public function getVoicePortalLockoutFromAddress()
    {
        return $this->voicePortalLockoutFromAddress;
    }

    /**
     * Setter for voicePortalLockoutFromAddress
     *
     * @ElementName voicePortalLockoutFromAddress
     * @param string|null $voicePortalLockoutFromAddress
     * @return $this
     */
    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress)
    {
        $this->voicePortalLockoutFromAddress = $voicePortalLockoutFromAddress;
        return $this;
    }

    /**
     * Getter for useSystemDefaultDeliveryFromAddress
     *
     * @ElementName useSystemDefaultDeliveryFromAddress
     * @return bool|null
     */
    public function getUseSystemDefaultDeliveryFromAddress()
    {
        return $this->useSystemDefaultDeliveryFromAddress;
    }

    /**
     * Setter for useSystemDefaultDeliveryFromAddress
     *
     * @ElementName useSystemDefaultDeliveryFromAddress
     * @param bool|null $useSystemDefaultDeliveryFromAddress
     * @return $this
     */
    public function setUseSystemDefaultDeliveryFromAddress($useSystemDefaultDeliveryFromAddress)
    {
        $this->useSystemDefaultDeliveryFromAddress = $useSystemDefaultDeliveryFromAddress;
        return $this;
    }

    /**
     * Getter for useSystemDefaultNotificationFromAddress
     *
     * @ElementName useSystemDefaultNotificationFromAddress
     * @return bool|null
     */
    public function getUseSystemDefaultNotificationFromAddress()
    {
        return $this->useSystemDefaultNotificationFromAddress;
    }

    /**
     * Setter for useSystemDefaultNotificationFromAddress
     *
     * @ElementName useSystemDefaultNotificationFromAddress
     * @param bool|null $useSystemDefaultNotificationFromAddress
     * @return $this
     */
    public function setUseSystemDefaultNotificationFromAddress($useSystemDefaultNotificationFromAddress)
    {
        $this->useSystemDefaultNotificationFromAddress = $useSystemDefaultNotificationFromAddress;
        return $this;
    }

    /**
     * Getter for useSystemDefaultVoicePortalLockoutFromAddress
     *
     * @ElementName useSystemDefaultVoicePortalLockoutFromAddress
     * @return bool|null
     */
    public function getUseSystemDefaultVoicePortalLockoutFromAddress()
    {
        return $this->useSystemDefaultVoicePortalLockoutFromAddress;
    }

    /**
     * Setter for useSystemDefaultVoicePortalLockoutFromAddress
     *
     * @ElementName useSystemDefaultVoicePortalLockoutFromAddress
     * @param bool|null $useSystemDefaultVoicePortalLockoutFromAddress
     * @return $this
     */
    public function setUseSystemDefaultVoicePortalLockoutFromAddress($useSystemDefaultVoicePortalLockoutFromAddress)
    {
        $this->useSystemDefaultVoicePortalLockoutFromAddress = $useSystemDefaultVoicePortalLockoutFromAddress;
        return $this;
    }


}

