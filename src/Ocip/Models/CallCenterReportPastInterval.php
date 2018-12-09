<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportPastInterval
 *
 * The call center enhanced reporting report past interval, for example, last 24 month.
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6718","type":"sequence"}]
 */
class CallCenterReportPastInterval
{

    /**
     * @ElementName number
     * @Type int
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6718
     * @var int|null
     */
    private $number = null;

    /**
     * @ElementName timeUnit
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6718
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalTimeUnit|null
     */
    private $timeUnit = null;

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

