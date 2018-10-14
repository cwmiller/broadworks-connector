<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTimeScheduleGetListResponse
 *
 * Response to the UserTimeScheduleGetListRequest. The column headings are "Time
 * Schedule" and
 *         "Type".
 *         The response contains user's personal and user's group's schedule names.
 *
 * @see UserTimeScheduleGetListRequest
 */
class UserTimeScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeScheduleTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $timeScheduleTable = null;

    /**
     * Getter for timeScheduleTable
     *
     * @ElementName timeScheduleTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTimeScheduleTable()
    {
        return $this->timeScheduleTable;
    }

    /**
     * Setter for timeScheduleTable
     *
     * @ElementName timeScheduleTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $timeScheduleTable
     * @return $this
     */
    public function setTimeScheduleTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $timeScheduleTable)
    {
        $this->timeScheduleTable = $timeScheduleTable;
        return $this;
    }


}

