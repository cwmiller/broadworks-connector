<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowAddCriteriaRequest
 *
 * Add a criterion to the user's call me now service.  The criterion added is
 * automatically active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallMeNowAddCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @var string|null
     */
    private $criteriaName = null;

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
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for criteriaName
     *
     * @ElementName criteriaName
     * @return string|null
     */
    public function getCriteriaName()
    {
        return $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @ElementName criteriaName
     * @param string|null $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

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
    public function setTimeSchedule($timeSchedule)
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
    public function setHolidaySchedule($holidaySchedule)
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
    public function setToDnCriteria($toDnCriteria)
    {
        $this->toDnCriteria = $toDnCriteria;
        return $this;
    }


}
