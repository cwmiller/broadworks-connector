<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest
 *
 * Request to get all the call center reporting scheduled report in an enterprise
 * that uses a given enterprise level report template.
 *         The response is either a
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 * or an ErrorResponse.
 *
 * @see
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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

