<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdviceOfChargeGetResponse
 *
 * Response to GroupAdviceOfChargeGetRequest.
 *         Contains a list of Advice of Charge group parameters.
 *
 * @see GroupAdviceOfChargeGetRequest
 * @Groups [{"id":"a69fde15f3aa7494d83b57461a7a70bb:68","type":"sequence"}]
 */
class GroupAdviceOfChargeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useGroupLevelAoCSettings
     * @Type bool
     * @Group a69fde15f3aa7494d83b57461a7a70bb:68
     * @var bool|null
     */
    private $useGroupLevelAoCSettings = null;

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @Type int
     * @Group a69fde15f3aa7494d83b57461a7a70bb:68
     * @MinInclusive 5
     * @MaxInclusive 1800
     * @var int|null
     */
    private $delayBetweenNotificationSeconds = null;

    /**
     * Getter for useGroupLevelAoCSettings
     *
     * @return bool
     */
    public function getUseGroupLevelAoCSettings()
    {
        return $this->useGroupLevelAoCSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupLevelAoCSettings;
    }

    /**
     * Setter for useGroupLevelAoCSettings
     *
     * @param bool $useGroupLevelAoCSettings
     * @return $this
     */
    public function setUseGroupLevelAoCSettings($useGroupLevelAoCSettings)
    {
        $this->useGroupLevelAoCSettings = $useGroupLevelAoCSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupLevelAoCSettings()
    {
        $this->useGroupLevelAoCSettings = null;
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

