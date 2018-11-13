<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCallCenterReportTemplateKey
 *
 * Criteria for searching for a particular call center enhanced reporting report
 * template.
 */
class SearchCriteriaExactCallCenterReportTemplateKey extends SearchCriteria
{

    /**
     * @ElementName reportTemplate
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey|null
     */
    private $reportTemplate = null;

    /**
     * Getter for reportTemplate
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportTemplate;
    }

    /**
     * Setter for reportTemplate
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey $reportTemplate
     * @return $this
     */
    public function setReportTemplate(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey $reportTemplate)
    {
        $this->reportTemplate = $reportTemplate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportTemplate()
    {
        $this->reportTemplate = null;
        return $this;
    }


}

