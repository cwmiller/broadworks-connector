<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Holiday
 *
 * Holiday entry.
 */
class Holiday
{

    /**
     * @ElementName holidayName
     * @var string|null
     */
    private $holidayName = null;

    /**
     * @ElementName startDate
     * @var string|null
     */
    private $startDate = null;

    /**
     * @ElementName endDate
     * @var string|null
     */
    private $endDate = null;

    /**
     * Getter for holidayName
     *
     * @ElementName holidayName
     * @return string|null
     */
    public function getHolidayName()
    {
        return $this->holidayName;
    }

    /**
     * Setter for holidayName
     *
     * @ElementName holidayName
     * @param string|null $holidayName
     * @return $this
     */
    public function setHolidayName($holidayName)
    {
        $this->holidayName = $holidayName;
        return $this;
    }

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


}

