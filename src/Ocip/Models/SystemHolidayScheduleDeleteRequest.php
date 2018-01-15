<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHolidayScheduleDeleteRequest
 *
 * Delete a system holiday schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemHolidayScheduleDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName holidayScheduleName
     * @var string|null
     */
    private $holidayScheduleName = null;

    /**
     * Getter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @return string|null
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @param string|null $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName($holidayScheduleName)
    {
        $this->holidayScheduleName = $holidayScheduleName;
        return $this;
    }


}

