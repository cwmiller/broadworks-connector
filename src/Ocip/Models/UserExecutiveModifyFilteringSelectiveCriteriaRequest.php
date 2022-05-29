<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveModifyFilteringSelectiveCriteriaRequest
 *
 * Modify a filtering selective criteria for an executive.
 *         Both executive and the executive assistant can run this command.
 *         For the callToNumbers in the callToNumberList, the extension element is not used and the number element is only used when the type is BroadWorks Mobility.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9a6dbade05624033cf7fe782b7c9a9a7:395","type":"sequence"}]
 */
class UserExecutiveModifyFilteringSelectiveCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:395
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:395
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $criteriaName = null;

    /**
     * @ElementName newCriteriaName
     * @Type string
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:395
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
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:395
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Nillable
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:395
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName filter
     * @Type bool
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:395
     * @var bool|null
     */
    protected $filter = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDnModify
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:395
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDnModify|null
     */
    protected $fromDnCriteria = null;

    /**
     * @ElementName callToNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList
     * @Nillable
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:395
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callToNumberList = null;

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
     * Getter for filter
     *
     * @return bool
     */
    public function getFilter()
    {
        return $this->filter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filter;
    }

    /**
     * Setter for filter
     *
     * @param bool $filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilter()
    {
        $this->filter = null;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDnModify
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDnModify $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDnModify $fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDnCriteria()
    {
        $this->fromDnCriteria = null;
        return $this;
    }

    /**
     * Getter for callToNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null
     */
    public function getCallToNumberList()
    {
        return $this->callToNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callToNumberList;
    }

    /**
     * Setter for callToNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null $callToNumberList
     * @return $this
     */
    public function setCallToNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList $callToNumberList = null)
    {
        if ($callToNumberList === null) {
            $this->callToNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callToNumberList = $callToNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallToNumberList()
    {
        $this->callToNumberList = null;
        return $this;
    }


}

