<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTimeScheduleGetListResponse
 *
 * Response to the GroupTimeScheduleGetListRequest.
 *         The response contains all the group's time schedule name.
 *
 * @see GroupTimeScheduleGetListRequest
 */
class GroupTimeScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @var string[]
     */
    private $timeSchedule = array(
        
    );

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @return string[]
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @param string[] $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Adder for timeSchedule
     *
     * @ElementName timeSchedule
     * @param string $timeSchedule
     * @return $this
     */
    public function addTimeSchedule($timeSchedule)
    {
        $this->timeSchedule []= $timeSchedule;
        return $this;
    }


}

