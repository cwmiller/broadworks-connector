<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHolidayScheduleGetRequest
 *
 * Get a system holiday schedule.
 *         The response is either a SystemHolidayScheduleGetResponse or an
 * ErrorResponse.
 *
 * @see SystemHolidayScheduleGetResponse
 * @see ErrorResponse
 */
class SystemHolidayScheduleGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName holidayScheduleName
     * @Type string
     * @var string|null
     */
    private $holidayScheduleName = null;

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

