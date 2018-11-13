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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
     */
    private $scheduleCombination = null;

    /**
     * @ElementName screenPrivateNumber
     * @Type bool
     * @var bool|null
     */
    private $screenPrivateNumber = null;

    /**
     * @ElementName emptyHolidayScheduleIsOutOfSchedule
     * @Type bool
     * @var bool|null
     */
    private $emptyHolidayScheduleIsOutOfSchedule = null;

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

