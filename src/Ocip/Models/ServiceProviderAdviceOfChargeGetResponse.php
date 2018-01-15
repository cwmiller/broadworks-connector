<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdviceOfChargeGetResponse
 *
 * Response to ServiceProviderAdviceOfChargeGetRequest.
 *         Contains a list of Advice of Charge service provider parameters.
 */
class ServiceProviderAdviceOfChargeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

