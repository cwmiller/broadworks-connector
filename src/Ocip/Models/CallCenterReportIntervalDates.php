<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportIntervalDates
 *
 * The call center enhanced reporting report interval, using dates.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7465","type":"sequence"}]
 */
class CallCenterReportIntervalDates
{
    /**
     * @ElementName startDate
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7465
     * @var string|null
     */
    protected $startDate = null;

    /**
     * @ElementName startTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group 4d65d3449061c568639c8cc1e2492285:7465
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    protected $startTime = null;

    /**
     * @ElementName endDate
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7465
     * @var string|null
     */
    protected $endDate = null;

    /**
     * @ElementName endTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group 4d65d3449061c568639c8cc1e2492285:7465
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    protected $endTime = null;

    /**
     * Getter for startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startDate;
    }

    /**
     * Setter for startDate
     *
     * @param string $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartDate()
    {
        $this->startDate = null;
        return $this;
    }

    /**
     * Getter for startTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     */
    public function getStartTime()
    {
        return $this->startTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute $startTime
     * @return $this
     */
    public function setStartTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartTime()
    {
        $this->startTime = null;
        return $this;
    }

    /**
     * Getter for endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endDate;
    }

    /**
     * Setter for endDate
     *
     * @param string $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndDate()
    {
        $this->endDate = null;
        return $this;
    }

    /**
     * Getter for endTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     */
    public function getEndTime()
    {
        return $this->endTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endTime;
    }

    /**
     * Setter for endTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute $endTime
     * @return $this
     */
    public function setEndTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndTime()
    {
        $this->endTime = null;
        return $this;
    }
}

