<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkDeviceMonitorParametersGetResponse
 *
 * Response to SystemNetworkDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Network Device Polling parameters.
 *
 * @see SystemNetworkDeviceMonitorParametersGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11539","type":"sequence"}]
 */
class SystemNetworkDeviceMonitorParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName pollingIntervalMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11539
     * @MinInclusive 0
     * @MaxInclusive 1440
     * @var int|null
     */
    private $pollingIntervalMinutes = null;

    /**
     * @ElementName failedPollingIntervalMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11539
     * @MinInclusive 1
     * @MaxInclusive 720
     * @var int|null
     */
    private $failedPollingIntervalMinutes = null;

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

