<?php

namespace CWM\BroadWorksConnector\Ocip\Models\Recurrence;

/**
 * RecurWeekly
 */
class RecurWeekly
{

    /**
     * @ElementName recurInterval
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * @ElementName sunday
     * @var bool|null
     */
    private $sunday = null;

    /**
     * @ElementName monday
     * @var bool|null
     */
    private $monday = null;

    /**
     * @ElementName tuesday
     * @var bool|null
     */
    private $tuesday = null;

    /**
     * @ElementName wednesday
     * @var bool|null
     */
    private $wednesday = null;

    /**
     * @ElementName thursday
     * @var bool|null
     */
    private $thursday = null;

    /**
     * @ElementName friday
     * @var bool|null
     */
    private $friday = null;

    /**
     * @ElementName saturday
     * @var bool|null
     */
    private $saturday = null;

    /**
     * Getter for recurInterval
     *
     * @ElementName recurInterval
     * @return int|null
     */
    public function getRecurInterval()
    {
        return $this->recurInterval;
    }

    /**
     * Setter for recurInterval
     *
     * @ElementName recurInterval
     * @param int|null $recurInterval
     * @return $this
     */
    public function setRecurInterval($recurInterval)
    {
        $this->recurInterval = $recurInterval;
        return $this;
    }

    /**
     * Getter for sunday
     *
     * @ElementName sunday
     * @return bool|null
     */
    public function getSunday()
    {
        return $this->sunday;
    }

    /**
     * Setter for sunday
     *
     * @ElementName sunday
     * @param bool|null $sunday
     * @return $this
     */
    public function setSunday($sunday)
    {
        $this->sunday = $sunday;
        return $this;
    }

    /**
     * Getter for monday
     *
     * @ElementName monday
     * @return bool|null
     */
    public function getMonday()
    {
        return $this->monday;
    }

    /**
     * Setter for monday
     *
     * @ElementName monday
     * @param bool|null $monday
     * @return $this
     */
    public function setMonday($monday)
    {
        $this->monday = $monday;
        return $this;
    }

    /**
     * Getter for tuesday
     *
     * @ElementName tuesday
     * @return bool|null
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * Setter for tuesday
     *
     * @ElementName tuesday
     * @param bool|null $tuesday
     * @return $this
     */
    public function setTuesday($tuesday)
    {
        $this->tuesday = $tuesday;
        return $this;
    }

    /**
     * Getter for wednesday
     *
     * @ElementName wednesday
     * @return bool|null
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }

    /**
     * Setter for wednesday
     *
     * @ElementName wednesday
     * @param bool|null $wednesday
     * @return $this
     */
    public function setWednesday($wednesday)
    {
        $this->wednesday = $wednesday;
        return $this;
    }

    /**
     * Getter for thursday
     *
     * @ElementName thursday
     * @return bool|null
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * Setter for thursday
     *
     * @ElementName thursday
     * @param bool|null $thursday
     * @return $this
     */
    public function setThursday($thursday)
    {
        $this->thursday = $thursday;
        return $this;
    }

    /**
     * Getter for friday
     *
     * @ElementName friday
     * @return bool|null
     */
    public function getFriday()
    {
        return $this->friday;
    }

    /**
     * Setter for friday
     *
     * @ElementName friday
     * @param bool|null $friday
     * @return $this
     */
    public function setFriday($friday)
    {
        $this->friday = $friday;
        return $this;
    }

    /**
     * Getter for saturday
     *
     * @ElementName saturday
     * @return bool|null
     */
    public function getSaturday()
    {
        return $this->saturday;
    }

    /**
     * Setter for saturday
     *
     * @ElementName saturday
     * @param bool|null $saturday
     * @return $this
     */
    public function setSaturday($saturday)
    {
        $this->saturday = $saturday;
        return $this;
    }


}

