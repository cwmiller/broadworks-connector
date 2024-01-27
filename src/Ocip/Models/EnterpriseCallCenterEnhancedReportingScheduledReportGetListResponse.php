<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse
 *
 * Response to EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest. 
 *         Contains a table with column headings : "Schedule Name", "Description", "Created By",
 *         "Is Supervisor Report", "Status", "Report Template Name", "Report Template Level" and "Recurring".
 *         The "Created By" can be either "Administrator" or user id if created by supervisor.
 *         The possible values for "Status" are "Active", and "Completed".
 *         The possible values for "Recurring" are "None", "Daily", "Weekly", "Monthly" and "Yearly". 
 *         The possible values for "Report Level" are "System" and "Enterprise".
 *
 * @see EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:1663","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduledReportTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:1663
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $scheduledReportTable = null;

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

