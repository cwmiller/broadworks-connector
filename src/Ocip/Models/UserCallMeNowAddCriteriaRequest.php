<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowAddCriteriaRequest
 *
 * Add a criterion to the user's call me now service.  The criterion added is automatically active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1f0f230fee2817fe00157925859dc28e:94","type":"sequence"}]
 */
class UserCallMeNowAddCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1f0f230fee2817fe00157925859dc28e:94
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 1f0f230fee2817fe00157925859dc28e:94
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $criteriaName = null;

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group 1f0f230fee2817fe00157925859dc28e:94
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group 1f0f230fee2817fe00157925859dc28e:94
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName rejectCall
     * @Type bool
     * @Group 1f0f230fee2817fe00157925859dc28e:94
     * @var bool|null
     */
    protected $rejectCall = null;

    /**
     * @ElementName toDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria
     * @Group 1f0f230fee2817fe00157925859dc28e:94
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteria|null
     */
    protected $toDnCriteria = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for criteriaName
     *
     * @return string
     */
    public function getCriteriaName()
    {
        return $this->criteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @param string $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaName()
    {
        $this->criteriaName = null;
        return $this;
    }

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

