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
     * @var string[]
     */
    private $scheduleType = array(
        
    );

    /**
     * @ElementName scheduleLevel
     * @var string[]
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
    public function setScheduleName($scheduleName)
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
    public function addScheduleName($scheduleName)
    {
        $this->scheduleName []= $scheduleName;
        return $this;
    }

    /**
     * Getter for scheduleType
     *
     * @ElementName scheduleType
     * @return string[]
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @ElementName scheduleType
     * @param string[] $scheduleType
     * @return $this
     */
    public function setScheduleType($scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * Adder for scheduleType
     *
     * @ElementName scheduleType
     * @param string $scheduleType
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
     * @return string[]
     */
    public function getScheduleLevel()
    {
        return $this->scheduleLevel;
    }

    /**
     * Setter for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @param string[] $scheduleLevel
     * @return $this
     */
    public function setScheduleLevel($scheduleLevel)
    {
        $this->scheduleLevel = $scheduleLevel;
        return $this;
    }

    /**
     * Adder for scheduleLevel
     *
     * @ElementName scheduleLevel
     * @param string $scheduleLevel
     * @return $this
     */
    public function addScheduleLevel($scheduleLevel)
    {
        $this->scheduleLevel []= $scheduleLevel;
        return $this;
    }


}

