<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdviceOfChargeGetResponse
 *
 * Response to GroupAdviceOfChargeGetRequest.
 *         Contains a list of Advice of Charge group parameters.
 */
class GroupAdviceOfChargeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useGroupLevelAoCSettings
     * @var bool|null
     */
    private $useGroupLevelAoCSettings = null;

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @var int|null
     */
    private $delayBetweenNotificationSeconds = null;

    /**
     * Getter for useGroupLevelAoCSettings
     *
     * @ElementName useGroupLevelAoCSettings
     * @return bool|null
     */
    public function getUseGroupLevelAoCSettings()
    {
        return $this->useGroupLevelAoCSettings;
    }

    /**
     * Setter for useGroupLevelAoCSettings
     *
     * @ElementName useGroupLevelAoCSettings
     * @param bool|null $useGroupLevelAoCSettings
     * @return $this
     */
    public function setUseGroupLevelAoCSettings($useGroupLevelAoCSettings)
    {
        $this->useGroupLevelAoCSettings = $useGroupLevelAoCSettings;
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

