<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetListResponse
 *
 * Response to UserScheduleGetListRequest.
 *         The response contains a list of system schedules.
 *
 * @see UserScheduleGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46655","type":"sequence"}]
 */
class UserScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduleName
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:46655
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $scheduleName = [
        
    ];

    /**
     * @ElementName scheduleType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:46655
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType[]
     */
    protected $scheduleType = [
        
    ];

    /**
     * @ElementName scheduleLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:46655
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel[]
     */
    protected $scheduleLevel = [
        
    ];

    /**
     * Getter for scheduleName
     *
     * @return string[]
     */
    public function getScheduleName()
    {
        return $this->scheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleName;
    }

    /**
     * Setter for scheduleName
     *
     * @param string[] $scheduleName
     * @return $this
     */
    public function setScheduleName(array $scheduleName)
    {
        $this->scheduleName = $scheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleName()
    {
        $this->scheduleName = null;
        return $this;
    }

    /**
     * Adder for scheduleName
     *
     * @param string $scheduleName
     * @return $this
     */
    public function addScheduleName(string $scheduleName)
    {
        $this->scheduleName[] = $scheduleName;
        return $this;
    }

    /**
     * Getter for scheduleType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType[]
     */
    public function getScheduleType()
    {
        return $this->scheduleType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType[] $scheduleType
     * @return $this
     */
    public function setScheduleType(array $scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleType()
    {
        $this->scheduleType = null;
        return $this;
    }

    /**
     * Adder for scheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType
     * @return $this
     */
    public function addScheduleType($scheduleType)
    {
        $this->scheduleType[] = $scheduleType;
        return $this;
    }

    /**
     * Getter for scheduleLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel[]
     */
    public function getScheduleLevel()
    {
        return $this->scheduleLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleLevel;
    }

    /**
     * Setter for scheduleLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel[] $scheduleLevel
     * @return $this
     */
    public function setScheduleLevel(array $scheduleLevel)
    {
        $this->scheduleLevel = $scheduleLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleLevel()
    {
        $this->scheduleLevel = null;
        return $this;
    }

    /**
     * Adder for scheduleLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $scheduleLevel
     * @return $this
     */
    public function addScheduleLevel($scheduleLevel)
    {
        $this->scheduleLevel[] = $scheduleLevel;
        return $this;
    }
}

