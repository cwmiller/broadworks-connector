<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportPastInterval
 *
 * The call center enhanced reporting report past interval, for example, last 24
 * month.
 */
class CallCenterReportPastInterval
{

    /**
     * @ElementName number
     * @var int|null
     */
    private $number = null;

    /**
     * @ElementName timeUnit
     * @var string|null
     */
    private $timeUnit = null;

    /**
     * Getter for number
     *
     * @ElementName number
     * @return int|null
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Setter for number
     *
     * @ElementName number
     * @param int|null $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

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

