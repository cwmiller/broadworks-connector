<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse
 *
 * Response to EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest.
 *         Contains a table with column headings: "Name", "Description", "Type" and "Enabled".
 *
 * @see EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:1413","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName reportTemplateTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:1413
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $reportTemplateTable = null;

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

