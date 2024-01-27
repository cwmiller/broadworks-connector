<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingGetResponse19
 *
 * Response to GroupCallCenterEnhancedReportingGetRequest19.
 *
 * @see GroupCallCenterEnhancedReportingGetRequest19
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:3390","type":"sequence"}]
 */
class GroupCallCenterEnhancedReportingGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName reportingServer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19
     * @Group 4d65d3449061c568639c8cc1e2492285:3390
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19|null
     */
    protected $reportingServer = null;

    /**
     * Getter for reportingServer
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19
     */
    public function getReportingServer()
    {
        return $this->reportingServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServer;
    }

    /**
     * Setter for reportingServer
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19 $reportingServer
     * @return $this
     */
    public function setReportingServer(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19 $reportingServer)
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
}

