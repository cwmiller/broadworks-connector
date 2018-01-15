<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest
 *
 * Request to get the input parameter info for a call center report template.
 *         The response is either a
 * UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse or an
 * ErrorResponse.
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
    public function setReportTemplate($reportTemplate)
    {
        $this->reportTemplate = $reportTemplate;
        return $this;
    }


}

