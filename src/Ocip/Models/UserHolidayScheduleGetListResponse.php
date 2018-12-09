<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHolidayScheduleGetListResponse
 *
 * Response to the UserHolidayScheduleGetListRequest.
 *         The response contains all the user's personal and user's group holiday schedule names.
 *
 * @see UserHolidayScheduleGetListRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:35861","type":"sequence"}]
 */
class UserHolidayScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName holidayScheduleTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:35861
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $holidayScheduleTable = null;

    /**
     * Getter for holidayScheduleTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getHolidayScheduleTable()
    {
        return $this->holidayScheduleTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayScheduleTable;
    }

    /**
     * Setter for holidayScheduleTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $holidayScheduleTable
     * @return $this
     */
    public function setHolidayScheduleTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $holidayScheduleTable)
    {
        $this->holidayScheduleTable = $holidayScheduleTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidayScheduleTable()
    {
        $this->holidayScheduleTable = null;
        return $this;
    }


}

