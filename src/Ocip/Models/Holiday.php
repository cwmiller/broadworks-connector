<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Holiday
 *
 * Holiday entry.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:49858","type":"sequence"}]
 */
class Holiday
{
    /**
     * @ElementName holidayName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:49858
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $holidayName = null;

    /**
     * @ElementName startDate
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:49858
     * @var string|null
     */
    protected $startDate = null;

    /**
     * @ElementName endDate
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49858
     * @var string|null
     */
    protected $endDate = null;

    /**
     * Getter for holidayName
     *
     * @return string
     */
    public function getHolidayName()
    {
        return $this->holidayName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayName;
    }

    /**
     * Setter for holidayName
     *
     * @param string $holidayName
     * @return $this
     */
    public function setHolidayName($holidayName)
    {
        $this->holidayName = $holidayName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidayName()
    {
        $this->holidayName = null;
        return $this;
    }

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
}

