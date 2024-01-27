<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceMonitorParametersGetResponse
 *
 * Response to SystemAccessDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Access Device Monitor parameters.
 *
 * @see SystemAccessDeviceMonitorParametersGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1679","type":"sequence"}]
 */
class SystemAccessDeviceMonitorParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName pollingIntervalMinutes
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:1679
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

