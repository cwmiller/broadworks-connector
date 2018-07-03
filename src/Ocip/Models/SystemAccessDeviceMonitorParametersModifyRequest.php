<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceMonitorParametersModifyRequest
 *
 * Request to modify Access Device Monitor system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAccessDeviceMonitorParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

