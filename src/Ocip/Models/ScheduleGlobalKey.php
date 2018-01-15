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
     * @var string|null
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
    public function setScheduleKey($scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * Getter for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @return string|null
     */
    public function getScheduleLevel()
    {
        return $this->scheduleLevel;
    }

    /**
     * Setter for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @param string|null $scheduleLevel
     * @return $this
     */
    public function setScheduleLevel($scheduleLevel)
    {
        $this->scheduleLevel = $scheduleLevel;
        return $this;
    }


}

