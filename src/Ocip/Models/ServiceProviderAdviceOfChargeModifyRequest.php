<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdviceOfChargeModifyRequest
 *
 * Modify the service provider level Advice Of Charge service provider settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderAdviceOfChargeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName useSPLevelAoCSettings
     * @var bool|null
     */
    private $useSPLevelAoCSettings = null;

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @var int|null
     */
    private $delayBetweenNotificationSeconds = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for useSPLevelAoCSettings
     *
     * @ElementName useSPLevelAoCSettings
     * @return bool|null
     */
    public function getUseSPLevelAoCSettings()
    {
        return $this->useSPLevelAoCSettings;
    }

    /**
     * Setter for useSPLevelAoCSettings
     *
     * @ElementName useSPLevelAoCSettings
     * @param bool|null $useSPLevelAoCSettings
     * @return $this
     */
    public function setUseSPLevelAoCSettings($useSPLevelAoCSettings)
    {
        $this->useSPLevelAoCSettings = $useSPLevelAoCSettings;
        return $this;
    }

    /**
     * Getter for delayBetweenNotificationSeconds
     *
     * @ElementName delayBetweenNotificationSeconds
     * @return int|null
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return $this->delayBetweenNotificationSeconds;
    }

    /**
     * Setter for delayBetweenNotificationSeconds
     *
     * @ElementName delayBetweenNotificationSeconds
     * @param int|null $delayBetweenNotificationSeconds
     * @return $this
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds)
    {
        $this->delayBetweenNotificationSeconds = $delayBetweenNotificationSeconds;
        return $this;
    }


}

