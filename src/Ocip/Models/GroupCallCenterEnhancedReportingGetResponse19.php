<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingGetResponse19
 *
 * Response to GroupCallCenterEnhancedReportingGetRequest19.
 */
class GroupCallCenterEnhancedReportingGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServer
     * @var string|null
     */
    private $reportingServer = null;

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


}

