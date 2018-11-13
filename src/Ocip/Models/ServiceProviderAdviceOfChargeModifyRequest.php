<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdviceOfChargeModifyRequest
 *
 * Modify the service provider level Advice Of Charge service provider settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderAdviceOfChargeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName useSPLevelAoCSettings
     * @Type bool
     * @var bool|null
     */
    private $useSPLevelAoCSettings = null;

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @Type int
     * @var int|null
     */
    private $delayBetweenNotificationSeconds = null;

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
     * Getter for useSPLevelAoCSettings
     *
     * @return bool
     */
    public function getUseSPLevelAoCSettings()
    {
        return $this->useSPLevelAoCSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSPLevelAoCSettings;
    }

    /**
     * Setter for useSPLevelAoCSettings
     *
     * @param bool $useSPLevelAoCSettings
     * @return $this
     */
    public function setUseSPLevelAoCSettings($useSPLevelAoCSettings)
    {
        $this->useSPLevelAoCSettings = $useSPLevelAoCSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSPLevelAoCSettings()
    {
        $this->useSPLevelAoCSettings = null;
        return $this;
    }

    /**
     * Getter for delayBetweenNotificationSeconds
     *
     * @return int
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return $this->delayBetweenNotificationSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->delayBetweenNotificationSeconds;
    }

    /**
     * Setter for delayBetweenNotificationSeconds
     *
     * @param int $delayBetweenNotificationSeconds
     * @return $this
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds)
    {
        $this->delayBetweenNotificationSeconds = $delayBetweenNotificationSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDelayBetweenNotificationSeconds()
    {
        $this->delayBetweenNotificationSeconds = null;
        return $this;
    }


}

