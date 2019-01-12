<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportCurrentInterval
 *
 * The call center enhanced reporting report current interval, for example, current week.
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7342","type":"sequence"}]
 */
class CallCenterReportCurrentInterval
{

    /**
     * @ElementName timeUnit
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit
     * @Group e2c537e3e39483b96620673a7012ffdd:7342
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit|null
     */
    private $timeUnit = null;

    /**
     * Getter for timeUnit
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit
     */
    public function getTimeUnit()
    {
        return $this->timeUnit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeUnit;
    }

    /**
     * Setter for timeUnit
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit $timeUnit
     * @return $this
     */
    public function setTimeUnit(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit $timeUnit)
    {
        $this->timeUnit = $timeUnit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeUnit()
    {
        $this->timeUnit = null;
        return $this;
    }


}

