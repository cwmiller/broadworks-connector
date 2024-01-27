<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportCurrentInterval
 *
 * The call center enhanced reporting report current interval, for example, current week.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7406","type":"sequence"}]
 */
class CallCenterReportCurrentInterval
{
    /**
     * @ElementName timeUnit
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit
     * @Group 4d65d3449061c568639c8cc1e2492285:7406
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit|null
     */
    protected $timeUnit = null;

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

