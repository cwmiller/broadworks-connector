<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingModifyRequest
 *
 * Request to modify enterprise level call center enhanced reporting settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by EnterpriseCallCenterEnhancedReportingModifyRequest19
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see EnterpriseCallCenterEnhancedReportingModifyRequest19
 */
class EnterpriseCallCenterEnhancedReportingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName reportingServer
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice|null
     */
    private $reportingServer = null;

    /**
     * @ElementName webStatisticSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource|null
     */
    private $webStatisticSource = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice|null
     */
    public function getReportingServer()
    {
        return $this->reportingServer;
    }

    /**
     * Setter for reportingServer
     *
     * @ElementName reportingServer
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice|null $reportingServer
     * @return $this
     */
    public function setReportingServer(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice $reportingServer)
    {
        $this->reportingServer = $reportingServer;
        return $this;
    }

    /**
     * Getter for webStatisticSource
     *
     * @ElementName webStatisticSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource|null
     */
    public function getWebStatisticSource()
    {
        return $this->webStatisticSource;
    }

    /**
     * Setter for webStatisticSource
     *
     * @ElementName webStatisticSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource|null $webStatisticSource
     * @return $this
     */
    public function setWebStatisticSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource $webStatisticSource)
    {
        $this->webStatisticSource = $webStatisticSource;
        return $this;
    }


}

