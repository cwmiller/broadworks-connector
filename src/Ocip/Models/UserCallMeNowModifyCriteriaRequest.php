<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowModifyCriteriaRequest
 *
 * Modify a criteria for the user's call me now service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"adf9583170c1dc9ec6c152ba1238437a:201","type":"sequence"}]
 */
class UserCallMeNowModifyCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group adf9583170c1dc9ec6c152ba1238437a:201
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group adf9583170c1dc9ec6c152ba1238437a:201
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $criteriaName = null;

    /**
     * @ElementName newCriteriaName
     * @Type string
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:201
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $newCriteriaName = null;

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Nillable
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:201
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Nillable
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:201
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName rejectCall
     * @Type bool
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:201
     * @var bool|null
     */
    protected $rejectCall = null;

    /**
     * @ElementName toDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteriaModify
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:201
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteriaModify|null
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
     * Getter for newCriteriaName
     *
     * @return string
     */
    public function getNewCriteriaName()
    {
        return $this->newCriteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newCriteriaName;
    }

    /**
     * Setter for newCriteriaName
     *
     * @param string $newCriteriaName
     * @return $this
     */
    public function setNewCriteriaName($newCriteriaName)
    {
        $this->newCriteriaName = $newCriteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewCriteriaName()
    {
        $this->newCriteriaName = null;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule = null)
    {
        if ($timeSchedule === null) {
            $this->timeSchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeSchedule = $timeSchedule;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule = null)
    {
        if ($holidaySchedule === null) {
            $this->holidaySchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holidaySchedule = $holidaySchedule;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteriaModify
     */
    public function getToDnCriteria()
    {
        return $this->toDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->toDnCriteria;
    }

    /**
     * Setter for toDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteriaModify $toDnCriteria
     * @return $this
     */
    public function setToDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\CallMeNowToDnCriteriaModify $toDnCriteria)
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

