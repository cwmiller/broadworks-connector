<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleGetListResponse
 *
 * Response to SystemScheduleGetListRequest.
 *         The response contains a list of system schedules.
 *
 * @see SystemScheduleGetListRequest
 */
class SystemScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}

