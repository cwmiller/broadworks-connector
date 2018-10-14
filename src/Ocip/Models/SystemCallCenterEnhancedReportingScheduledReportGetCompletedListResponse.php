<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse
 *
 * Response to
 * SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest 
 *         Contains a table with column headings : "Scheduled Report Name",
 * "Description",
 *         "Service Provider Id", "Is Enterprise", "Group Id", "Created By", "Is
 * Supervisor Report", 
 *         "Report Template Name", "Report Template Level" and "Recurring".
 *         The "Created By" can be either "Administrator" or user id if created by
 * supervisor.
 *         The possible values for "Recurring" are "None", "Daily", "Weekly",
 * "Monthly" and "Yearly". 
 *         The possible values for "Report Template Level" are "System",
 * "Enterprise" and "Group".
 *         For the rows with "Is Enterprise" column value "true", the "Group Id"
 * column will be empty.
 *
 * @see SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest
 */
class SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduledReportTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $scheduledReportTable = null;

    /**
     * Getter for scheduledReportTable
     *
     * @ElementName scheduledReportTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getScheduledReportTable()
    {
        return $this->scheduledReportTable;
    }

    /**
     * Setter for scheduledReportTable
     *
     * @ElementName scheduledReportTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $scheduledReportTable
     * @return $this
     */
    public function setScheduledReportTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduledReportTable)
    {
        $this->scheduledReportTable = $scheduledReportTable;
        return $this;
    }


}

