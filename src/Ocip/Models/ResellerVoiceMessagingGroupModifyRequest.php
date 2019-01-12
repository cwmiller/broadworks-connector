<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerVoiceMessagingGroupModifyRequest
 *
 * Modify the reseller level data associated with Voice Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:354","type":"sequence"}]
 */
class ResellerVoiceMessagingGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:354
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName deliveryFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:354
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deliveryFromAddress = null;

    /**
     * @ElementName notificationFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:354
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $notificationFromAddress = null;

    /**
     * @ElementName voicePortalLockoutFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:354
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $voicePortalLockoutFromAddress = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
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
    public function setDeliveryFromAddress($deliveryFromAddress)
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
    public function setNotificationFromAddress($notificationFromAddress)
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
    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress)
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


}

