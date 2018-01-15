<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeAddAlertingGroupSelectiveCriteriaRequest
 *
 * Add a criteria to the Find-me/Follow-me alerting group.
 *         For the callToNumber, the extension and number elements are not used and
 * the only types accepted for each number are Primary and Alternates. If other
 * type is specified the command fails.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupFindMeFollowMeAddAlertingGroupSelectiveCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @var string|null
     */
    private $alertingGroupName = null;

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
     * @ElementName blacklisted
     * @var bool|null
     */
    private $blacklisted = null;

    /**
     * @ElementName fromDnCriteria
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    private $fromDnCriteria = null;

    /**
     * @ElementName callToNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    private $callToNumber = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for alertingGroupName
     *
     * @ElementName alertingGroupName
     * @return string|null
     */
    public function getAlertingGroupName()
    {
        return $this->alertingGroupName;
    }

    /**
     * Setter for alertingGroupName
     *
     * @ElementName alertingGroupName
     * @param string|null $alertingGroupName
     * @return $this
     */
    public function setAlertingGroupName($alertingGroupName)
    {
        $this->alertingGroupName = $alertingGroupName;
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
     * Getter for blacklisted
     *
     * @ElementName blacklisted
     * @return bool|null
     */
    public function getBlacklisted()
    {
        return $this->blacklisted;
    }

    /**
     * Setter for blacklisted
     *
     * @ElementName blacklisted
     * @param bool|null $blacklisted
     * @return $this
     */
    public function setBlacklisted($blacklisted)
    {
        $this->blacklisted = $blacklisted;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @ElementName fromDnCriteria
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @ElementName fromDnCriteria
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria($fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * Getter for callToNumber
     *
     * @ElementName callToNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    public function getCallToNumber()
    {
        return $this->callToNumber;
    }

    /**
     * Setter for callToNumber
     *
     * @ElementName callToNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[] $callToNumber
     * @return $this
     */
    public function setCallToNumber($callToNumber)
    {
        $this->callToNumber = $callToNumber;
        return $this;
    }

    /**
     * Adder for callToNumber
     *
     * @ElementName callToNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber $callToNumber
     * @return $this
     */
    public function addCallToNumber($callToNumber)
    {
        $this->callToNumber []= $callToNumber;
        return $this;
    }


}

