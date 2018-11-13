<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeScheduleGetListResponse
 *
 * Response to the SystemTimeScheduleGetListRequest.
 *         The response contains all the system time schedule names.
 *
 * @see SystemTimeScheduleGetListRequest
 */
class SystemTimeScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Array
     * @var string[]
     */
    private $timeSchedule = array(
        
    );

    /**
     * Getter for timeSchedule
     *
     * @return string[]
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param string[] $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(array $timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
        return $this;
    }

    /**
     * Adder for timeSchedule
     *
     * @param string $timeSchedule
     * @return $this
     */
    public function addTimeSchedule(string $timeSchedule)
    {
        $this->timeSchedule[] = $timeSchedule;
        return $this;
    }


}

