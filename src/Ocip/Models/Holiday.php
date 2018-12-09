<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Holiday
 *
 * Holiday entry.
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:39211","type":"sequence"}]
 */
class Holiday
{

    /**
     * @ElementName holidayName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:39211
     * @var string|null
     */
    private $holidayName = null;

    /**
     * @ElementName startDate
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:39211
     * @var string|null
     */
    private $startDate = null;

    /**
     * @ElementName endDate
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:39211
     * @var string|null
     */
    private $endDate = null;

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

