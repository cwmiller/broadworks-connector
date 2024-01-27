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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1695","type":"sequence"}]
 */
class SystemAccessDeviceMonitorParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName pollingIntervalMinutes
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1695
     * @MinInclusive 0
     * @MaxInclusive 1440
     * @var int|null
     */
    protected $pollingIntervalMinutes = null;

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
}

