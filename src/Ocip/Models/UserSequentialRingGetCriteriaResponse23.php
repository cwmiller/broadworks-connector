<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingGetCriteriaResponse23
 *
 * Response to the UserSequentialRingGetCriteriaRequest23.
 *
 * @see UserSequentialRingGetCriteriaRequest23
 * @Groups [{"id":"15725c7b98a01f80f88e9d5af56d48a5:102","type":"sequence"}]
 */
class UserSequentialRingGetCriteriaResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group 15725c7b98a01f80f88e9d5af56d48a5:102
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group 15725c7b98a01f80f88e9d5af56d48a5:102
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName blacklisted
     * @Type bool
     * @Group 15725c7b98a01f80f88e9d5af56d48a5:102
     * @var bool|null
     */
    protected $blacklisted = null;

    /**
     * @ElementName fromDnCriteria23
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn23
     * @Group 15725c7b98a01f80f88e9d5af56d48a5:102
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn23|null
     */
    protected $fromDnCriteria23 = null;

    /**
     * Getter for timeSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidaySchedule()
    {
        $this->holidaySchedule = null;
        return $this;
    }

    /**
     * Getter for blacklisted
     *
     * @return bool
     */
    public function getBlacklisted()
    {
        return $this->blacklisted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blacklisted;
    }

    /**
     * Setter for blacklisted
     *
     * @param bool $blacklisted
     * @return $this
     */
    public function setBlacklisted($blacklisted)
    {
        $this->blacklisted = $blacklisted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlacklisted()
    {
        $this->blacklisted = null;
        return $this;
    }

    /**
     * Getter for fromDnCriteria23
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn23
     */
    public function getFromDnCriteria23()
    {
        return $this->fromDnCriteria23 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteria23;
    }

    /**
     * Setter for fromDnCriteria23
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn23 $fromDnCriteria23
     * @return $this
     */
    public function setFromDnCriteria23(\CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn23 $fromDnCriteria23)
    {
        $this->fromDnCriteria23 = $fromDnCriteria23;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDnCriteria23()
    {
        $this->fromDnCriteria23 = null;
        return $this;
    }
}

