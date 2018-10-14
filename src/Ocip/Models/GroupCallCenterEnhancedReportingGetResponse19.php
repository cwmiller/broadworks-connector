<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingGetResponse19
 *
 * Response to GroupCallCenterEnhancedReportingGetRequest19.
 *
 * @see GroupCallCenterEnhancedReportingGetRequest19
 */
class GroupCallCenterEnhancedReportingGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServer
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19|null
     */
    private $reportingServer = null;

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

