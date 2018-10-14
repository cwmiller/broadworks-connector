<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSelectiveServicesModifyRequest
 *
 * Modify the system level data associated with SystemSelectiveServicesRequest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SystemSelectiveServicesRequest
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSelectiveServicesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName scheduleCombination
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
     */
    public function getScheduleCombination()
    {
        return $this->scheduleCombination;
    }

    /**
     * Setter for scheduleCombination
     *
     * @ElementName scheduleCombination
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null $scheduleCombination
     * @return $this
     */
    public function setScheduleCombination(\CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType $scheduleCombination)
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

