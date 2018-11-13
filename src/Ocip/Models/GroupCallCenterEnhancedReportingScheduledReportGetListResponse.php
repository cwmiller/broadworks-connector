<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingScheduledReportGetListResponse
 *
 * Response to GroupCallCenterEnhancedReportingScheduledReportGetListRequest. 
 *         Contains a table with column headings : "Schedule Name", "Description",
 * "Created By",
 *         "Is Supervisor Report", "Status", "Report Template Name", "Report
 * Template Level" and "Recurring".
 *         The "Created By" can be either "Administrator" or user id if created by
 * supervisor.
 *         The possible values for "Status" are "Active", and "Completed".
 *         The possible values for "Recurring" are "None", "Daily", "Weekly",
 * "Monthly" and "Yearly". 
 *         The possible values for "Report Template Level" are "System" and
 * "Group".
 *
 * @see GroupCallCenterEnhancedReportingScheduledReportGetListRequest
 */
class GroupCallCenterEnhancedReportingScheduledReportGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduledReportTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $scheduledReportTable = null;

    /**
     * Getter for scheduledReportTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getScheduledReportTable()
    {
        return $this->scheduledReportTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduledReportTable;
    }

    /**
     * Setter for scheduledReportTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduledReportTable
     * @return $this
     */
    public function setScheduledReportTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduledReportTable)
    {
        $this->scheduledReportTable = $scheduledReportTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduledReportTable()
    {
        $this->scheduledReportTable = null;
        return $this;
    }


}

