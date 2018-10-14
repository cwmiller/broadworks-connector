<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetListResponse
 *
 * Response to UserScheduleGetListRequest.
 *         The response contains a list of system schedules.
 *
 * @see UserScheduleGetListRequest
 */
class UserScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleName
     * @var string[]
     */
    private $scheduleName = array(
        
    );

    /**
     * @ElementName scheduleType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType[]
     */
    private $scheduleType = array(
        
    );

    /**
     * @ElementName scheduleLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel[]
     */
    private $scheduleLevel = array(
        
    );

    /**
     * Getter for scheduleName
     *
     * @ElementName scheduleName
     * @return string[]
     */
    public function getScheduleName()
    {
        return $this->scheduleName;
    }

    /**
     * Setter for scheduleName
     *
     * @ElementName scheduleName
     * @param string[] $scheduleName
     * @return $this
     */
    public function setScheduleName(array $scheduleName)
    {
        $this->scheduleName = $scheduleName;
        return $this;
    }

    /**
     * Adder for scheduleName
     *
     * @ElementName scheduleName
     * @param string $scheduleName
     * @return $this
     */
    public function addScheduleName(string $scheduleName)
    {
        $this->scheduleName []= $scheduleName;
        return $this;
    }

    /**
     * Getter for scheduleType
     *
     * @ElementName scheduleType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType[]
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @ElementName scheduleType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType[] $scheduleType
     * @return $this
     */
    public function setScheduleType(array $scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * Adder for scheduleType
     *
     * @ElementName scheduleType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType
     * @return $this
     */
    public function addScheduleType($scheduleType)
    {
        $this->scheduleType []= $scheduleType;
        return $this;
    }

    /**
     * Getter for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel[]
     */
    public function getScheduleLevel()
    {
        return $this->scheduleLevel;
    }

    /**
     * Setter for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel[] $scheduleLevel
     * @return $this
     */
    public function setScheduleLevel(array $scheduleLevel)
    {
        $this->scheduleLevel = $scheduleLevel;
        return $this;
    }

    /**
     * Adder for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $scheduleLevel
     * @return $this
     */
    public function addScheduleLevel($scheduleLevel)
    {
        $this->scheduleLevel []= $scheduleLevel;
        return $this;
    }


}

