<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportCurrentInterval
 *
 * The call center enhanced reporting report current interval, for example, current
 * week.
 */
class CallCenterReportCurrentInterval
{

    /**
     * @ElementName timeUnit
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit|null
     */
    private $timeUnit = null;

    /**
     * Getter for timeUnit
     *
     * @ElementName timeUnit
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit|null
     */
    public function getTimeUnit()
    {
        return $this->timeUnit;
    }

    /**
     * Setter for timeUnit
     *
     * @ElementName timeUnit
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit|null $timeUnit
     * @return $this
     */
    public function setTimeUnit(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit $timeUnit)
    {
        $this->timeUnit = $timeUnit;
        return $this;
    }


}

