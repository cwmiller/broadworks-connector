<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportIntervalDates
 *
 * The call center enhanced reporting report interval, using dates.
 */
class CallCenterReportIntervalDates
{

    /**
     * @ElementName startDate
     * @var string|null
     */
    private $startDate = null;

    /**
     * @ElementName startTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $startTime = null;

    /**
     * @ElementName endDate
     * @var string|null
     */
    private $endDate = null;

    /**
     * @ElementName endTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $endTime = null;

    /**
     * Getter for startDate
     *
     * @ElementName startDate
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Setter for startDate
     *
     * @ElementName startDate
     * @param string|null $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Getter for startTime
     *
     * @ElementName startTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @ElementName startTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null $startTime
     * @return $this
     */
    public function setStartTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Getter for endDate
     *
     * @ElementName endDate
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Setter for endDate
     *
     * @ElementName endDate
     * @param string|null $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Getter for endTime
     *
     * @ElementName endTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Setter for endTime
     *
     * @ElementName endTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null $endTime
     * @return $this
     */
    public function setEndTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }


}

