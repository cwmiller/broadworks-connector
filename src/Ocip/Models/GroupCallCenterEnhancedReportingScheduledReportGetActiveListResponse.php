<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse
 *
 * Response to GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest 
 *         Contains a table with column headings : "Schedule Name", "Description",
 * "Created By",
 *         "Is Supervisor Report", "Report Template Name", "Report Template Level"
 * and "Recurring".
 *         The "Created By" can be either "Administrator" or user id if created by
 * supervisor.
 *         The possible values for "Recurring" are "None", "Daily", "Weekly",
 * "Monthly" and "Yearly". 
 *         The possible values for "Report Template Level" are "System" and
 * "Group".
 */
class GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setScheduledReportTable($scheduledReportTable)
    {
        $this->scheduledReportTable = $scheduledReportTable;
        return $this;
    }


}

