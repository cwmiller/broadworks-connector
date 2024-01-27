<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHolidayScheduleDeleteRequest
 *
 * Delete a system holiday schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:27614","type":"sequence"}]
 */
class SystemHolidayScheduleDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName holidayScheduleName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:27614
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $holidayScheduleName = null;

    /**
     * Getter for holidayScheduleName
     *
     * @return string
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @param string $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName($holidayScheduleName)
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
}

