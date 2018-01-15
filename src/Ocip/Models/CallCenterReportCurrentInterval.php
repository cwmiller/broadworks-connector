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
     * @var string|null
     */
    private $timeUnit = null;

    /**
     * Getter for timeUnit
     *
     * @ElementName timeUnit
     * @return string|null
     */
    public function getTimeUnit()
    {
        return $this->timeUnit;
    }

    /**
     * Setter for timeUnit
     *
     * @ElementName timeUnit
     * @param string|null $timeUnit
     * @return $this
     */
    public function setTimeUnit($timeUnit)
    {
        $this->timeUnit = $timeUnit;
        return $this;
    }


}

