<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurWeekly
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3008","type":"sequence"}]
 */
class RecurrenceRecurWeekly
{

    /**
     * @ElementName recurInterval
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3008
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * @ElementName sunday
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3008
     * @var bool|null
     */
    private $sunday = null;

    /**
     * @ElementName monday
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3008
     * @var bool|null
     */
    private $monday = null;

    /**
     * @ElementName tuesday
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3008
     * @var bool|null
     */
    private $tuesday = null;

    /**
     * @ElementName wednesday
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3008
     * @var bool|null
     */
    private $wednesday = null;

    /**
     * @ElementName thursday
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3008
     * @var bool|null
     */
    private $thursday = null;

    /**
     * @ElementName friday
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3008
     * @var bool|null
     */
    private $friday = null;

    /**
     * @ElementName saturday
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3008
     * @var bool|null
     */
    private $saturday = null;

    /**
     * Getter for recurInterval
     *
     * @return int
     */
    public function getRecurInterval()
    {
        return $this->recurInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurInterval;
    }

    /**
     * Setter for recurInterval
     *
     * @param int $recurInterval
     * @return $this
     */
    public function setRecurInterval($recurInterval)
    {
        $this->recurInterval = $recurInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurInterval()
    {
        $this->recurInterval = null;
        return $this;
    }

    /**
     * Getter for sunday
     *
     * @return bool
     */
    public function getSunday()
    {
        return $this->sunday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sunday;
    }

    /**
     * Setter for sunday
     *
     * @param bool $sunday
     * @return $this
     */
    public function setSunday($sunday)
    {
        $this->sunday = $sunday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSunday()
    {
        $this->sunday = null;
        return $this;
    }

    /**
     * Getter for monday
     *
     * @return bool
     */
    public function getMonday()
    {
        return $this->monday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monday;
    }

    /**
     * Setter for monday
     *
     * @param bool $monday
     * @return $this
     */
    public function setMonday($monday)
    {
        $this->monday = $monday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonday()
    {
        $this->monday = null;
        return $this;
    }

    /**
     * Getter for tuesday
     *
     * @return bool
     */
    public function getTuesday()
    {
        return $this->tuesday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tuesday;
    }

    /**
     * Setter for tuesday
     *
     * @param bool $tuesday
     * @return $this
     */
    public function setTuesday($tuesday)
    {
        $this->tuesday = $tuesday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTuesday()
    {
        $this->tuesday = null;
        return $this;
    }

    /**
     * Getter for wednesday
     *
     * @return bool
     */
    public function getWednesday()
    {
        return $this->wednesday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wednesday;
    }

    /**
     * Setter for wednesday
     *
     * @param bool $wednesday
     * @return $this
     */
    public function setWednesday($wednesday)
    {
        $this->wednesday = $wednesday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWednesday()
    {
        $this->wednesday = null;
        return $this;
    }

    /**
     * Getter for thursday
     *
     * @return bool
     */
    public function getThursday()
    {
        return $this->thursday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thursday;
    }

    /**
     * Setter for thursday
     *
     * @param bool $thursday
     * @return $this
     */
    public function setThursday($thursday)
    {
        $this->thursday = $thursday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThursday()
    {
        $this->thursday = null;
        return $this;
    }

    /**
     * Getter for friday
     *
     * @return bool
     */
    public function getFriday()
    {
        return $this->friday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->friday;
    }

    /**
     * Setter for friday
     *
     * @param bool $friday
     * @return $this
     */
    public function setFriday($friday)
    {
        $this->friday = $friday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFriday()
    {
        $this->friday = null;
        return $this;
    }

    /**
     * Getter for saturday
     *
     * @return bool
     */
    public function getSaturday()
    {
        return $this->saturday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->saturday;
    }

    /**
     * Setter for saturday
     *
     * @param bool $saturday
     * @return $this
     */
    public function setSaturday($saturday)
    {
        $this->saturday = $saturday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSaturday()
    {
        $this->saturday = null;
        return $this;
    }


}

