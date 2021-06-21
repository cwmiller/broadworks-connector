<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetPagedSortedListResponse
 *
 * Response to UserScheduleGetPagedSortedListRequest.
 *         Contains a 3 column table with column headings: "Name", "Type", "Level"
 *         and a row for each schedule.
 *
 * @see UserScheduleGetPagedSortedListRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3782","type":"sequence"}]
 */
class UserScheduleGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3782
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $scheduleTable = null;

    /**
     * Getter for scheduleTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getScheduleTable()
    {
        return $this->scheduleTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleTable;
    }

    /**
     * Setter for scheduleTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduleTable
     * @return $this
     */
    public function setScheduleTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduleTable)
    {
        $this->scheduleTable = $scheduleTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleTable()
    {
        $this->scheduleTable = null;
        return $this;
    }


}

