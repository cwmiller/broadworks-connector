<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingGetResponse19
 *
 * Response to EnterpriseCallCenterEnhancedReportingGetRequest19.
 *
 * @see EnterpriseCallCenterEnhancedReportingGetRequest19
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:1312","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19
     * @Group e2c537e3e39483b96620673a7012ffdd:1312
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19|null
     */
    private $reportingServer = null;

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

