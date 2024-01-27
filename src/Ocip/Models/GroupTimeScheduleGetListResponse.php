<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTimeScheduleGetListResponse
 *
 * Response to the GroupTimeScheduleGetListRequest.
 *         The response contains all the group's time schedule name.
 *
 * @see GroupTimeScheduleGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:13440","type":"sequence"}]
 */
class GroupTimeScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName timeSchedule
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:13440
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $timeSchedule = [
        
    ];

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

