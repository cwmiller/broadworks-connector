<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetListResponse
 *
 * Response to ServiceProviderScheduleGetListRequest.
 *         The response contains a list of service provider schedules.
 *
 * @see ServiceProviderScheduleGetListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5026","type":"sequence"}]
 */
class ServiceProviderScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5026
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    private $scheduleKey = array(
        
    );

    /**
     * Getter for scheduleKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[] $scheduleKey
     * @return $this
     */
    public function setScheduleKey(array $scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleKey()
    {
        $this->scheduleKey = null;
        return $this;
    }

    /**
     * Adder for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey
     * @return $this
     */
    public function addScheduleKey($scheduleKey)
    {
        $this->scheduleKey[] = $scheduleKey;
        return $this;
    }


}

