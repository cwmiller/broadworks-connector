<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingGetResponse
 *
 * Response to GroupCallCenterEnhancedReportingGetRequest.
 *         
 *         Replaced by GroupCallCenterEnhancedReportingGetResponse19
 *
 * @see GroupCallCenterEnhancedReportingGetRequest
 * @see GroupCallCenterEnhancedReportingGetResponse19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4894","type":"sequence"}]
 */
class GroupCallCenterEnhancedReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4894
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice|null
     */
    protected $reportingServer = null;

    /**
     * @ElementName webStatisticSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4894
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

