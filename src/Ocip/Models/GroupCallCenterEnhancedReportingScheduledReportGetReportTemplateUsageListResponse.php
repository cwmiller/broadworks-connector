<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 *
 * Response to GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest.
 *         Contains a table with column headings: "Schedule Name", "Created By", "Created By Supervisor",
 *         and "Is Active".
 *         The "Created By" can be either "Administrator" or user id if created by supervisor.
 *
 * @see GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:3786","type":"sequence"}]
 */
class GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduleReportTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:3786
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $scheduleReportTable = null;

    /**
     * Getter for scheduleReportTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getScheduleReportTable()
    {
        return $this->scheduleReportTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleReportTable;
    }

    /**
     * Setter for scheduleReportTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduleReportTable
     * @return $this
     */
    public function setScheduleReportTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduleReportTable)
    {
        $this->scheduleReportTable = $scheduleReportTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleReportTable()
    {
        $this->scheduleReportTable = null;
        return $this;
    }
}

