<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ScheduleKey
 *
 * Uniquely identifies Holiday and Time Schedules within a level(System, Service
 * Provider, Group or User level).
 */
class ScheduleKey
{

    /**
     * @ElementName scheduleName
     * @var string|null
     */
    private $scheduleName = null;

    /**
     * @ElementName scheduleType
     * @var string|null
     */
    private $scheduleType = null;

    /**
     * Getter for scheduleName
     *
     * @ElementName scheduleName
     * @return string|null
     */
    public function getScheduleName()
    {
        return $this->scheduleName;
    }

    /**
     * Setter for scheduleName
     *
     * @ElementName scheduleName
     * @param string|null $scheduleName
     * @return $this
     */
    public function setScheduleName($scheduleName)
    {
        $this->scheduleName = $scheduleName;
        return $this;
    }

    /**
     * Getter for scheduleType
     *
     * @ElementName scheduleType
     * @return string|null
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @ElementName scheduleType
     * @param string|null $scheduleType
     * @return $this
     */
    public function setScheduleType($scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }


}

