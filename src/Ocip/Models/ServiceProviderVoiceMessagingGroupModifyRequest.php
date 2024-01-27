<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupModifyRequest
 *
 * Request to modify a service provider's or enterprise's voice messaging settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:477","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:477
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName deliveryFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:477
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $deliveryFromAddress = null;

    /**
     * @ElementName notificationFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:477
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $notificationFromAddress = null;

    /**
     * @ElementName voicePortalLockoutFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:477
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $voicePortalLockoutFromAddress = null;

    /**
     * @ElementName useSystemDefaultDeliveryFromAddress
     * @Type bool
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:477
     * @var bool|null
     */
    protected $useSystemDefaultDeliveryFromAddress = null;

    /**
     * @ElementName useSystemDefaultNotificationFromAddress
     * @Type bool
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:477
     * @var bool|null
     */
    protected $useSystemDefaultNotificationFromAddress = null;

    /**
     * @ElementName useSystemDefaultVoicePortalLockoutFromAddress
     * @Type bool
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:477
     * @var bool|null
     */
    protected $useSystemDefaultVoicePortalLockoutFromAddress = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for deliveryFromAddress
     *
     * @return string|null
     */
    public function getDeliveryFromAddress()
    {
        return $this->deliveryFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deliveryFromAddress;
    }

    /**
     * Setter for deliveryFromAddress
     *
     * @param string|null $deliveryFromAddress
     * @return $this
     */
    public function setDeliveryFromAddress($deliveryFromAddress = null)
    {
        if ($deliveryFromAddress === null) {
            $this->deliveryFromAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deliveryFromAddress = $deliveryFromAddress;
        }
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
     * @return string|null
     */
    public function getNotificationFromAddress()
    {
        return $this->notificationFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notificationFromAddress;
    }

    /**
     * Setter for notificationFromAddress
     *
     * @param string|null $notificationFromAddress
     * @return $this
     */
    public function setNotificationFromAddress($notificationFromAddress = null)
    {
        if ($notificationFromAddress === null) {
            $this->notificationFromAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->notificationFromAddress = $notificationFromAddress;
        }
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
     * @return string|null
     */
    public function getVoicePortalLockoutFromAddress()
    {
        return $this->voicePortalLockoutFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalLockoutFromAddress;
    }

    /**
     * Setter for voicePortalLockoutFromAddress
     *
     * @param string|null $voicePortalLockoutFromAddress
     * @return $this
     */
    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress = null)
    {
        if ($voicePortalLockoutFromAddress === null) {
            $this->voicePortalLockoutFromAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->voicePortalLockoutFromAddress = $voicePortalLockoutFromAddress;
        }
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

