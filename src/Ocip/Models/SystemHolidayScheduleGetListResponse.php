<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHolidayScheduleGetListResponse
 *
 * Response to the SystemHolidayScheduleGetListRequest.
 *         The response contains all the system holiday schedule names.
 *
 * @see SystemHolidayScheduleGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:27644","type":"sequence"}]
 */
class SystemHolidayScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName holidayScheduleName
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:27644
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

