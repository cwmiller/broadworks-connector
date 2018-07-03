<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingReportTemplateGetRequest
 *
 * Request to get a system level call center report template.
 *         The response is either a
 * SystemCallCenterEnhancedReportingReportTemplateGetResponse or an ErrorResponse.
 *
 * @see SystemCallCenterEnhancedReportingReportTemplateGetResponse
 * @see ErrorResponse
 */
class SystemCallCenterEnhancedReportingReportTemplateGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

