<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTimeScheduleGetListResponse
 *
 * Response to the UserTimeScheduleGetListRequest. The column headings are "Time Schedule" and
 *         "Type".
 *         The response contains user's personal and user's group's schedule names.
 *
 * @see UserTimeScheduleGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47656","type":"sequence"}]
 */
class UserTimeScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName timeScheduleTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:47656
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $timeScheduleTable = null;

    /**
     * Getter for timeScheduleTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTimeScheduleTable()
    {
        return $this->timeScheduleTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeScheduleTable;
    }

    /**
     * Setter for timeScheduleTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $timeScheduleTable
     * @return $this
     */
    public function setTimeScheduleTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $timeScheduleTable)
    {
        $this->timeScheduleTable = $timeScheduleTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeScheduleTable()
    {
        $this->timeScheduleTable = null;
        return $this;
    }
}

