<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceMonitorParametersGetResponse
 *
 * Response to SystemAccessDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Access Device Monitor parameters.
 *
 * @see SystemAccessDeviceMonitorParametersGetListRequest
 */
class SystemAccessDeviceMonitorParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName pollingIntervalMinutes
     * @var int|null
     */
    private $pollingIntervalMinutes = null;

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


}

