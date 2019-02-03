<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse
 *
 * Response to GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest.
 *         Contains a table with column headings: "Name", "Description" and "Level", "Is Agent Required", 
 *         "Is Call Center Required", "Is Call Center Dnis Required","Is Real Time Report", "Is Sampling Period Required", 
 *         "Call Completion Threshold Parameter", "Short Duration Threshold Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions Parameter", "Service Level Objective Threshold Parameter", 
 *         "Abandoned Call Threshold Parameter", "Service Level Threshold Parameter Number", 
 *         and "Abandoned Call Threshold Parameter Number".
 *         The possible values for "Level" are "System" and "Group".
 *         The possible values for "Is Agent Required", "Is Call Center Required", "Is Call Center Dnis Required", 
 *         "Is Real Time Report" and "Is Sampling Period Required" are "true" and "false".
 *         The possible values for "Call Completion Threshold Parameter", "Short Duration Threshold Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions Parameter","Service Level Objective Threshold Parameter" 
 *         and "Abandoned Call Threshold Parameter" are "Required", "Hidden" and "Does Not Apply".
 *
 * @see GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:3352","type":"sequence"}]
 */
class GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportTemplateTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:3352
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $reportTemplateTable = null;

    /**
     * Getter for reportTemplateTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getReportTemplateTable()
    {
        return $this->reportTemplateTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportTemplateTable;
    }

    /**
     * Setter for reportTemplateTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $reportTemplateTable
     * @return $this
     */
    public function setReportTemplateTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $reportTemplateTable)
    {
        $this->reportTemplateTable = $reportTemplateTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportTemplateTable()
    {
        $this->reportTemplateTable = null;
        return $this;
    }


}

