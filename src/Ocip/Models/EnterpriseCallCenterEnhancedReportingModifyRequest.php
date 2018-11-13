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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName reportingServer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice|null
     */
    private $reportingServer = null;

    /**
     * @ElementName webStatisticSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource|null
     */
    private $webStatisticSource = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for reportingServer
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice
     */
    public function getReportingServer()
    {
        return $this->reportingServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServer;
    }

    /**
     * Setter for reportingServer
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice $reportingServer
     * @return $this
     */
    public function setReportingServer(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice $reportingServer)
    {
        $this->reportingServer = $reportingServer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingServer()
    {
        $this->reportingServer = null;
        return $this;
    }

    /**
     * Getter for webStatisticSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource
     */
    public function getWebStatisticSource()
    {
        return $this->webStatisticSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webStatisticSource;
    }

    /**
     * Setter for webStatisticSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource $webStatisticSource
     * @return $this
     */
    public function setWebStatisticSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource $webStatisticSource)
    {
        $this->webStatisticSource = $webStatisticSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebStatisticSource()
    {
        $this->webStatisticSource = null;
        return $this;
    }


}

