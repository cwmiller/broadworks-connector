<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkDeviceMonitorParametersGetResponse
 *
 * Response to SystemNetworkDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Network Device Polling parameters.
 */
class SystemNetworkDeviceMonitorParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

