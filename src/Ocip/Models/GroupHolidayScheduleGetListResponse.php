<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHolidayScheduleGetListResponse
 *
 * Response to the GroupHolidayScheduleGetListRequest.
 *         The response contains all the group's holiday schedule name.
 *
 * @see GroupHolidayScheduleGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:10360","type":"sequence"}]
 */
class GroupHolidayScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName holidayScheduleName
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:10360
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $holidayScheduleName = [
        
    ];

    /**
     * Getter for holidayScheduleName
     *
     * @return string[]
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @param string[] $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName(array $holidayScheduleName)
    {
        $this->holidayScheduleName = $holidayScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidayScheduleName()
    {
        $this->holidayScheduleName = null;
        return $this;
    }

    /**
     * Adder for holidayScheduleName
     *
     * @param string $holidayScheduleName
     * @return $this
     */
    public function addHolidayScheduleName(string $holidayScheduleName)
    {
        $this->holidayScheduleName[] = $holidayScheduleName;
        return $this;
    }
}

