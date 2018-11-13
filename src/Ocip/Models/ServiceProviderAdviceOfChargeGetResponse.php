<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdviceOfChargeGetResponse
 *
 * Response to ServiceProviderAdviceOfChargeGetRequest.
 *         Contains a list of Advice of Charge service provider parameters.
 *
 * @see ServiceProviderAdviceOfChargeGetRequest
 */
class ServiceProviderAdviceOfChargeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

