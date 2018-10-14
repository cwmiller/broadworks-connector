<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetListResponse
 *
 * Response to ServiceProviderScheduleGetListRequest.
 *         The response contains a list of service provider schedules.
 *
 * @see ServiceProviderScheduleGetListRequest
 */
class ServiceProviderScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    private $scheduleKey = array(
        
    );

    /**
     * Getter for scheduleKey
     *
     * @ElementName scheduleKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @ElementName scheduleKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[] $scheduleKey
     * @return $this
     */
    public function setScheduleKey(array $scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * Adder for scheduleKey
     *
     * @ElementName scheduleKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey
     * @return $this
     */
    public function addScheduleKey($scheduleKey)
    {
        $this->scheduleKey []= $scheduleKey;
        return $this;
    }


}

