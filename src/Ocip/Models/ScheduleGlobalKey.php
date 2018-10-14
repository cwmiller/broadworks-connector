<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ScheduleGlobalKey
 *
 * Uniquely identifies Holiday and Time Schedules throughout all System, Service
 * Provider, Group and User level.
 */
class ScheduleGlobalKey
{

    /**
     * @ElementName scheduleKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    private $scheduleKey = null;

    /**
     * @ElementName scheduleLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    private $scheduleLevel = null;

    /**
     * Getter for scheduleKey
     *
     * @ElementName scheduleKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @ElementName scheduleKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null $scheduleKey
     * @return $this
     */
    public function setScheduleKey(\CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * Getter for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    public function getScheduleLevel()
    {
        return $this->scheduleLevel;
    }

    /**
     * Setter for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null $scheduleLevel
     * @return $this
     */
    public function setScheduleLevel(\CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $scheduleLevel)
    {
        $this->scheduleLevel = $scheduleLevel;
        return $this;
    }


}

