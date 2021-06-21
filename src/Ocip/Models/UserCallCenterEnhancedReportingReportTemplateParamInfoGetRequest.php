<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest
 *
 * Request to get the input parameter info for a call center report template.
 *         The response is either a UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse or an ErrorResponse.
 *
 * @see UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6763","type":"sequence"}]
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName reportTemplate
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey
     * @Group e2c537e3e39483b96620673a7012ffdd:6763
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

