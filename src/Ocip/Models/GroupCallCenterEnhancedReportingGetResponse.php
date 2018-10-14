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
 */
class GroupCallCenterEnhancedReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

