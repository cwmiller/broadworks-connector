<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse
 *
 * Response to
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest. 
 *         Contains a table with column headings : "Schedule Name", "Description",
 * "Created By",
 *         "Is Supervisor Report", "Report Template Name", "Report Template Level"
 * and "Recurring".
 *         The "Created By" can be either "Administrator" or user id if created by
 * supervisor.
 *         The possible values for "Recurring" are "None", "Daily", "Weekly",
 * "Monthly" and "Yearly". 
 *         The possible values for "Report Level" are "System" and "Enterprise".
 *
 * @see EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

