<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSelectiveServicesGetResponse22
 *
 * Response to SystemSelectiveServicesGetRequest22.
 */
class SystemSelectiveServicesGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleCombination
     * @var string|null
     */
    private $scheduleCombination = null;

    /**
     * @ElementName screenPrivateNumber
     * @var bool|null
     */
    private $screenPrivateNumber = null;

    /**
     * @ElementName emptyHolidayScheduleIsOutOfSchedule
     * @var bool|null
     */
    private $emptyHolidayScheduleIsOutOfSchedule = null;

    /**
     * Getter for scheduleCombination
     *
     * @ElementName scheduleCombination
     * @return string|null
     */
    public function getScheduleCombination()
    {
        return $this->scheduleCombination;
    }

    /**
     * Setter for scheduleCombination
     *
     * @ElementName scheduleCombination
     * @param string|null $scheduleCombination
     * @return $this
     */
    public function setScheduleCombination($scheduleCombination)
    {
        $this->scheduleCombination = $scheduleCombination;
        return $this;
    }

    /**
     * Getter for screenPrivateNumber
     *
     * @ElementName screenPrivateNumber
     * @return bool|null
     */
    public function getScreenPrivateNumber()
    {
        return $this->screenPrivateNumber;
    }

    /**
     * Setter for screenPrivateNumber
     *
     * @ElementName screenPrivateNumber
     * @param bool|null $screenPrivateNumber
     * @return $this
     */
    public function setScreenPrivateNumber($screenPrivateNumber)
    {
        $this->screenPrivateNumber = $screenPrivateNumber;
        return $this;
    }

    /**
     * Getter for emptyHolidayScheduleIsOutOfSchedule
     *
     * @ElementName emptyHolidayScheduleIsOutOfSchedule
     * @return bool|null
     */
    public function getEmptyHolidayScheduleIsOutOfSchedule()
    {
        return $this->emptyHolidayScheduleIsOutOfSchedule;
    }

    /**
     * Setter for emptyHolidayScheduleIsOutOfSchedule
     *
     * @ElementName emptyHolidayScheduleIsOutOfSchedule
     * @param bool|null $emptyHolidayScheduleIsOutOfSchedule
     * @return $this
     */
    public function setEmptyHolidayScheduleIsOutOfSchedule($emptyHolidayScheduleIsOutOfSchedule)
    {
        $this->emptyHolidayScheduleIsOutOfSchedule = $emptyHolidayScheduleIsOutOfSchedule;
        return $this;
    }


}

