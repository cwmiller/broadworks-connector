<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHolidayScheduleGetListResponse
 *
 * Response to the UserHolidayScheduleGetListRequest.
 *         The response contains all the user's personal and user's group holiday
 * schedule names.
 *
 * @see UserHolidayScheduleGetListRequest
 */
class UserHolidayScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName holidayScheduleTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $holidayScheduleTable = null;

    /**
     * Getter for holidayScheduleTable
     *
     * @ElementName holidayScheduleTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getHolidayScheduleTable()
    {
        return $this->holidayScheduleTable;
    }

    /**
     * Setter for holidayScheduleTable
     *
     * @ElementName holidayScheduleTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $holidayScheduleTable
     * @return $this
     */
    public function setHolidayScheduleTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $holidayScheduleTable)
    {
        $this->holidayScheduleTable = $holidayScheduleTable;
        return $this;
    }


}

