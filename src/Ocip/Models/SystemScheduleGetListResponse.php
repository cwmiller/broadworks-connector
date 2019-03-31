<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleGetListResponse
 *
 * Response to SystemScheduleGetListRequest.
 *         The response contains a list of system schedules.
 *
 * @see SystemScheduleGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14654","type":"sequence"}]
 */
class SystemScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleName
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14654
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    private $scheduleName = array(
        
    );

    /**
     * @ElementName scheduleType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14654
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType[]
     */
    private $scheduleType = array(
        
    );

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


}

