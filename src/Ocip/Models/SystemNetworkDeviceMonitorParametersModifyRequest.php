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
 */
class SystemNetworkDeviceMonitorParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName pollingIntervalMinutes
     * @var int|null
     */
    private $pollingIntervalMinutes = null;

    /**
     * @ElementName failedPollingIntervalMinutes
     * @var int|null
     */
    private $failedPollingIntervalMinutes = null;

    /**
     * Getter for pollingIntervalMinutes
     *
     * @ElementName pollingIntervalMinutes
     * @return int|null
     */
    public function getPollingIntervalMinutes()
    {
        return $this->pollingIntervalMinutes;
    }

    /**
     * Setter for pollingIntervalMinutes
     *
     * @ElementName pollingIntervalMinutes
     * @param int|null $pollingIntervalMinutes
     * @return $this
     */
    public function setPollingIntervalMinutes($pollingIntervalMinutes)
    {
        $this->pollingIntervalMinutes = $pollingIntervalMinutes;
        return $this;
    }

    /**
     * Getter for failedPollingIntervalMinutes
     *
     * @ElementName failedPollingIntervalMinutes
     * @return int|null
     */
    public function getFailedPollingIntervalMinutes()
    {
        return $this->failedPollingIntervalMinutes;
    }

    /**
     * Setter for failedPollingIntervalMinutes
     *
     * @ElementName failedPollingIntervalMinutes
     * @param int|null $failedPollingIntervalMinutes
     * @return $this
     */
    public function setFailedPollingIntervalMinutes($failedPollingIntervalMinutes)
    {
        $this->failedPollingIntervalMinutes = $failedPollingIntervalMinutes;
        return $this;
    }


}

