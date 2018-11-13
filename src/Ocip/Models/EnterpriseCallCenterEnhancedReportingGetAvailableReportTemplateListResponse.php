<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse
 *
 * Response to
 * EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest. 
 *         Contains a table with column headings: "Name", "Description" and
 * "Level", "Is Agent Required", 
 *         "Is Call Center Required", "Is Call Center Dnis Required", "Is Real Time
 * Report", "Is Sampling Period Required", 
 *         "Call Completion Threshold Parameter", "Short Duration Threshold
 * Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions
 * Parameter", "Service Level Objective Threshold Parameter",
 *         "Abandoned Call Threshold Parameter", "Service Level Threshold Parameter
 * Number", 
 *         "Abandoned Call Threshold Parameter Number" and "Scope".
 *         The possible values for "Level" are "System" and "Enterprise".
 *         The possible values for "Is Agent Required", "Is Call Center Required",
 * "Is Call Center Dnis Required", "Is Real Time Report" and
 *         "Is Sampling Period Required" are "true" and "false".
 *         The possible values for "Call Completion Threshold Parameter", "Short
 * Duration Threshold Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions
 * Parameter", "Service Level Objective Threshold Parameter"
 *         and "Abandoned Call Threshold Parameter" are "Required", "Hidden" and
 * "Does Not Apply".
 *         The possible values for "Scope" are "Supervisor Only" and "Supervisor
 * and Agent".
 *
 * @see EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest
 */
class EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportTemplateTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
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

