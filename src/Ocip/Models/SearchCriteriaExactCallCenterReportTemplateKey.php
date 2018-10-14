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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey|null
     */
    private $reportTemplate = null;

    /**
     * Getter for reportTemplate
     *
     * @ElementName reportTemplate
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey|null
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
    }

    /**
     * Setter for reportTemplate
     *
     * @ElementName reportTemplate
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey|null $reportTemplate
     * @return $this
     */
    public function setReportTemplate(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey $reportTemplate)
    {
        $this->reportTemplate = $reportTemplate;
        return $this;
    }


}

