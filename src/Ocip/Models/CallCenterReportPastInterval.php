<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportPastInterval
 *
 * The call center enhanced reporting report past interval, for example, last 24 month.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7479","type":"sequence"}]
 */
class CallCenterReportPastInterval
{
    /**
     * @ElementName number
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7479
     * @MinInclusive 1
     * @MaxInclusive 99
     * @var int|null
     */
    protected $number = null;

    /**
     * @ElementName timeUnit
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit
     * @Group 4d65d3449061c568639c8cc1e2492285:7479
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit|null
     */
    protected $timeUnit = null;

    /**
     * Getter for number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->number;
    }

    /**
     * Setter for number
     *
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumber()
    {
        $this->number = null;
        return $this;
    }

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

