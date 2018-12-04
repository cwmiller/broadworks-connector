<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetCriteriaResponse
 *
 * Response to the UserCallMeNowGetCriteriaRequest.
 *
 * @see UserCallMeNowGetCriteriaRequest
 * @Groups [{"id":"4b461d8be4f7bfba1e05db8efbd896b6:148","type":"sequence"}]
 */
class UserCallMeNowGetCriteriaResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group 4b461d8be4f7bfba1e05db8efbd896b6:148
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group 4b461d8be4f7bfba1e05db8efbd896b6:148
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName rejectCall
     * @Type bool
     * @Group 4b461d8be4f7bfba1e05db8efbd896b6:148
     * @var bool|null
     */
    private $rejectCall = null;

    /**
     * @ElementName toDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria
     * @Group 4b461d8be4f7bfba1e05db8efbd896b6:148
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria|null
     */
    private $toDnCriteria = null;

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
     * Getter for rejectCall
     *
     * @return bool
     */
    public function getRejectCall()
    {
        return $this->rejectCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rejectCall;
    }

    /**
     * Setter for rejectCall
     *
     * @param bool $rejectCall
     * @return $this
     */
    public function setRejectCall($rejectCall)
    {
        $this->rejectCall = $rejectCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRejectCall()
    {
        $this->rejectCall = null;
        return $this;
    }

    /**
     * Getter for toDnCriteria
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria
     */
    public function getToDnCriteria()
    {
        return $this->toDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->toDnCriteria;
    }

    /**
     * Setter for toDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria $toDnCriteria
     * @return $this
     */
    public function setToDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria $toDnCriteria)
    {
        $this->toDnCriteria = $toDnCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetToDnCriteria()
    {
        $this->toDnCriteria = null;
        return $this;
    }


}

