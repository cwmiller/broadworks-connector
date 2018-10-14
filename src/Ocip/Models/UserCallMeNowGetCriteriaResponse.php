<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetCriteriaResponse
 *
 * Response to the UserCallMeNowGetCriteriaRequest.
 *
 * @see UserCallMeNowGetCriteriaRequest
 */
class UserCallMeNowGetCriteriaResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName rejectCall
     * @var bool|null
     */
    private $rejectCall = null;

    /**
     * @ElementName toDnCriteria
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria|null
     */
    private $toDnCriteria = null;

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * Getter for rejectCall
     *
     * @ElementName rejectCall
     * @return bool|null
     */
    public function getRejectCall()
    {
        return $this->rejectCall;
    }

    /**
     * Setter for rejectCall
     *
     * @ElementName rejectCall
     * @param bool|null $rejectCall
     * @return $this
     */
    public function setRejectCall($rejectCall)
    {
        $this->rejectCall = $rejectCall;
        return $this;
    }

    /**
     * Getter for toDnCriteria
     *
     * @ElementName toDnCriteria
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria|null
     */
    public function getToDnCriteria()
    {
        return $this->toDnCriteria;
    }

    /**
     * Setter for toDnCriteria
     *
     * @ElementName toDnCriteria
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria|null $toDnCriteria
     * @return $this
     */
    public function setToDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria $toDnCriteria)
    {
        $this->toDnCriteria = $toDnCriteria;
        return $this;
    }


}

