<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetListResponse
 *
 * Response to ServiceProviderScheduleGetListRequest.
 *         The response contains a list of service provider schedules.
 *
 * @see ServiceProviderScheduleGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5921","type":"sequence"}]
 */
class ServiceProviderScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5921
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    protected $scheduleKey = [
        
    ];

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

