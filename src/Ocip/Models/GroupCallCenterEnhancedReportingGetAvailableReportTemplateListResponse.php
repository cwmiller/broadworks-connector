<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse
 *
 * Response to
 * GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest.
 *         Contains a table with column headings: "Name", "Description" and
 * "Level", "Is Agent Required", 
 *         "Is Call Center Required", "Is Call Center Dnis Required","Is Real Time
 * Report", "Is Sampling Period Required", 
 *         "Call Completion Threshold Parameter", "Short Duration Threshold
 * Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions
 * Parameter", "Service Level Objective Threshold Parameter", 
 *         "Abandoned Call Threshold Parameter", "Service Level Threshold Parameter
 * Number", 
 *         and "Abandoned Call Threshold Parameter Number".
 *         The possible values for "Level" are "System" and "Group".
 *         The possible values for "Is Agent Required", "Is Call Center Required",
 * "Is Call Center Dnis Required", 
 *         "Is Real Time Report" and "Is Sampling Period Required" are "true" and
 * "false".
 *         The possible values for "Call Completion Threshold Parameter", "Short
 * Duration Threshold Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions
 * Parameter","Service Level Objective Threshold Parameter" 
 *         and "Abandoned Call Threshold Parameter" are "Required", "Hidden" and
 * "Does Not Apply".
 */
class GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportTemplateTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $reportTemplateTable = null;

    /**
     * Getter for reportTemplateTable
     *
     * @ElementName reportTemplateTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getReportTemplateTable()
    {
        return $this->reportTemplateTable;
    }

    /**
     * Setter for reportTemplateTable
     *
     * @ElementName reportTemplateTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $reportTemplateTable
     * @return $this
     */
    public function setReportTemplateTable($reportTemplateTable)
    {
        $this->reportTemplateTable = $reportTemplateTable;
        return $this;
    }


}

