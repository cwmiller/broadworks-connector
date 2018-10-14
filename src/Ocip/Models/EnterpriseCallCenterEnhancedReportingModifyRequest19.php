<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingModifyRequest19
 *
 * Request to modify enterprise level call center enhanced reporting settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterEnhancedReportingModifyRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName reportingServer
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19|null
     */
    private $reportingServer = null;

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
     * Getter for reportingServer
     *
     * @ElementName reportingServer
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19|null
     */
    public function getReportingServer()
    {
        return $this->reportingServer;
    }

    /**
     * Setter for reportingServer
     *
     * @ElementName reportingServer
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19|null $reportingServer
     * @return $this
     */
    public function setReportingServer(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19 $reportingServer)
    {
        $this->reportingServer = $reportingServer;
        return $this;
    }


}

