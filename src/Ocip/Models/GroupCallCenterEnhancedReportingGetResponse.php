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
     * @var string|null
     */
    private $reportingServer = null;

    /**
     * @ElementName webStatisticSource
     * @var string|null
     */
    private $webStatisticSource = null;

    /**
     * Getter for reportingServer
     *
     * @ElementName reportingServer
     * @return string|null
     */
    public function getReportingServer()
    {
        return $this->reportingServer;
    }

    /**
     * Setter for reportingServer
     *
     * @ElementName reportingServer
     * @param string|null $reportingServer
     * @return $this
     */
    public function setReportingServer($reportingServer)
    {
        $this->reportingServer = $reportingServer;
        return $this;
    }

    /**
     * Getter for webStatisticSource
     *
     * @ElementName webStatisticSource
     * @return string|null
     */
    public function getWebStatisticSource()
    {
        return $this->webStatisticSource;
    }

    /**
     * Setter for webStatisticSource
     *
     * @ElementName webStatisticSource
     * @param string|null $webStatisticSource
     * @return $this
     */
    public function setWebStatisticSource($webStatisticSource)
    {
        $this->webStatisticSource = $webStatisticSource;
        return $this;
    }


}

