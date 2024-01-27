<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSelectiveServicesGetResponse22
 *
 * Response to SystemSelectiveServicesGetRequest22.
 *
 * @see SystemSelectiveServicesGetRequest22
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16090","type":"sequence"}]
 */
class SystemSelectiveServicesGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduleCombination
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType
     * @Group da582a1f8028404e70d260cf1f891033:16090
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
     */
    protected $scheduleCombination = null;

    /**
     * @ElementName screenPrivateNumber
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16090
     * @var bool|null
     */
    protected $screenPrivateNumber = null;

    /**
     * @ElementName emptyHolidayScheduleIsOutOfSchedule
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16090
     * @var bool|null
     */
    protected $emptyHolidayScheduleIsOutOfSchedule = null;

    /**
     * Getter for scheduleCombination
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType
     */
    public function getScheduleCombination()
    {
        return $this->scheduleCombination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleCombination;
    }

    /**
     * Setter for scheduleCombination
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType $scheduleCombination
     * @return $this
     */
    public function setScheduleCombination(\CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType $scheduleCombination)
    {
        $this->scheduleCombination = $scheduleCombination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleCombination()
    {
        $this->scheduleCombination = null;
        return $this;
    }

    /**
     * Getter for screenPrivateNumber
     *
     * @return bool
     */
    public function getScreenPrivateNumber()
    {
        return $this->screenPrivateNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->screenPrivateNumber;
    }

    /**
     * Setter for screenPrivateNumber
     *
     * @param bool $screenPrivateNumber
     * @return $this
     */
    public function setScreenPrivateNumber($screenPrivateNumber)
    {
        $this->screenPrivateNumber = $screenPrivateNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScreenPrivateNumber()
    {
        $this->screenPrivateNumber = null;
        return $this;
    }

    /**
     * Getter for emptyHolidayScheduleIsOutOfSchedule
     *
     * @return bool
     */
    public function getEmptyHolidayScheduleIsOutOfSchedule()
    {
        return $this->emptyHolidayScheduleIsOutOfSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emptyHolidayScheduleIsOutOfSchedule;
    }

    /**
     * Setter for emptyHolidayScheduleIsOutOfSchedule
     *
     * @param bool $emptyHolidayScheduleIsOutOfSchedule
     * @return $this
     */
    public function setEmptyHolidayScheduleIsOutOfSchedule($emptyHolidayScheduleIsOutOfSchedule)
    {
        $this->emptyHolidayScheduleIsOutOfSchedule = $emptyHolidayScheduleIsOutOfSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmptyHolidayScheduleIsOutOfSchedule()
    {
        $this->emptyHolidayScheduleIsOutOfSchedule = null;
        return $this;
    }
}

