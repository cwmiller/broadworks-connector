<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerVoiceMessagingGroupGetResponse
 *
 * Response to ResellerVoiceMessagingGroupGetRequest.
 *
 * @see ResellerVoiceMessagingGroupGetRequest
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:336","type":"sequence"}]
 */
class ResellerVoiceMessagingGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deliveryFromAddress
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:336
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $deliveryFromAddress = null;

    /**
     * @ElementName notificationFromAddress
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:336
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $notificationFromAddress = null;

    /**
     * @ElementName voicePortalLockoutFromAddress
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:336
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $voicePortalLockoutFromAddress = null;

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
}

