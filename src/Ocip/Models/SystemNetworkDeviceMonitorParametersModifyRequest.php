<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkDeviceMonitorParametersModifyRequest
 *
 * Request to modify Network Device Polling system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12802","type":"sequence"}]
 */
class SystemNetworkDeviceMonitorParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName pollingIntervalMinutes
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12802
     * @MinInclusive 0
     * @MaxInclusive 1440
     * @var int|null
     */
    protected $pollingIntervalMinutes = null;

    /**
     * @ElementName failedPollingIntervalMinutes
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12802
     * @MinInclusive 1
     * @MaxInclusive 720
     * @var int|null
     */
    protected $failedPollingIntervalMinutes = null;

    /**
     * Getter for pollingIntervalMinutes
     *
     * @return int
     */
    public function getPollingIntervalMinutes()
    {
        return $this->pollingIntervalMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pollingIntervalMinutes;
    }

    /**
     * Setter for pollingIntervalMinutes
     *
     * @param int $pollingIntervalMinutes
     * @return $this
     */
    public function setPollingIntervalMinutes($pollingIntervalMinutes)
    {
        $this->pollingIntervalMinutes = $pollingIntervalMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPollingIntervalMinutes()
    {
        $this->pollingIntervalMinutes = null;
        return $this;
    }

    /**
     * Getter for failedPollingIntervalMinutes
     *
     * @return int
     */
    public function getFailedPollingIntervalMinutes()
    {
        return $this->failedPollingIntervalMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->failedPollingIntervalMinutes;
    }

    /**
     * Setter for failedPollingIntervalMinutes
     *
     * @param int $failedPollingIntervalMinutes
     * @return $this
     */
    public function setFailedPollingIntervalMinutes($failedPollingIntervalMinutes)
    {
        $this->failedPollingIntervalMinutes = $failedPollingIntervalMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFailedPollingIntervalMinutes()
    {
        $this->failedPollingIntervalMinutes = null;
        return $this;
    }
}

