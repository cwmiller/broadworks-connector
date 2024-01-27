<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingGetResponse
 *
 * Response to EnterpriseCallCenterEnhancedReportingGetRequest.
 *         
 *         Replaced by EnterpriseCallCenterEnhancedReportingGetResponse19
 *
 * @see EnterpriseCallCenterEnhancedReportingGetRequest
 * @see EnterpriseCallCenterEnhancedReportingGetResponse19
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2213","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName reportingServer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice
     * @Group d8f04177e438f303b41c211e518706bf:2213
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice|null
     */
    protected $reportingServer = null;

    /**
     * @ElementName webStatisticSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource
     * @Group d8f04177e438f303b41c211e518706bf:2213
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource|null
     */
    protected $webStatisticSource = null;

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

