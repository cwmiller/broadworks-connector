<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest
 *
 * Request to get all the call center reporting scheduled report in the system that uses a 
 *         given system level report template. 
 *         The response is either a SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 *         or an ErrorResponse.
 *
 * @see SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6423","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:6423
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }


}

