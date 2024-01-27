<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantModifyCriteriaRequest
 *
 * Modifies a User Personal Assistant Schedule Selective Criteria Entry.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:434","type":"sequence"}]
 */
class UserPersonalAssistantModifyCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $criteriaName = null;

    /**
     * @ElementName newCriteriaName
     * @Type string
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
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
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Nillable
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName presence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence|null
     */
    protected $presence = null;

    /**
     * @ElementName enableTransferToAttendant
     * @Type bool
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @var bool|null
     */
    protected $enableTransferToAttendant = null;

    /**
     * @ElementName attendantNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $attendantNumber = null;

    /**
     * @ElementName enableRingSplash
     * @Type bool
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @var bool|null
     */
    protected $enableRingSplash = null;

    /**
     * @ElementName alertMeFirst
     * @Type bool
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @var bool|null
     */
    protected $alertMeFirst = null;

    /**
     * @ElementName alertMeFirstNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:434
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings|null
     */
    protected $alertMeFirstNumberOfRings = null;

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
     * Getter for presence
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence
     */
    public function getPresence()
    {
        return $this->presence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->presence;
    }

    /**
     * Setter for presence
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence $presence
     * @return $this
     */
    public function setPresence(\CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence $presence)
    {
        $this->presence = $presence;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPresence()
    {
        $this->presence = null;
        return $this;
    }

    /**
     * Getter for enableTransferToAttendant
     *
     * @return bool
     */
    public function getEnableTransferToAttendant()
    {
        return $this->enableTransferToAttendant instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTransferToAttendant;
    }

    /**
     * Setter for enableTransferToAttendant
     *
     * @param bool $enableTransferToAttendant
     * @return $this
     */
    public function setEnableTransferToAttendant($enableTransferToAttendant)
    {
        $this->enableTransferToAttendant = $enableTransferToAttendant;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTransferToAttendant()
    {
        $this->enableTransferToAttendant = null;
        return $this;
    }

    /**
     * Getter for attendantNumber
     *
     * @return string|null
     */
    public function getAttendantNumber()
    {
        return $this->attendantNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attendantNumber;
    }

    /**
     * Setter for attendantNumber
     *
     * @param string|null $attendantNumber
     * @return $this
     */
    public function setAttendantNumber($attendantNumber = null)
    {
        if ($attendantNumber === null) {
            $this->attendantNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->attendantNumber = $attendantNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttendantNumber()
    {
        $this->attendantNumber = null;
        return $this;
    }

    /**
     * Getter for enableRingSplash
     *
     * @return bool
     */
    public function getEnableRingSplash()
    {
        return $this->enableRingSplash instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableRingSplash;
    }

    /**
     * Setter for enableRingSplash
     *
     * @param bool $enableRingSplash
     * @return $this
     */
    public function setEnableRingSplash($enableRingSplash)
    {
        $this->enableRingSplash = $enableRingSplash;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableRingSplash()
    {
        $this->enableRingSplash = null;
        return $this;
    }

    /**
     * Getter for alertMeFirst
     *
     * @return bool
     */
    public function getAlertMeFirst()
    {
        return $this->alertMeFirst instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertMeFirst;
    }

    /**
     * Setter for alertMeFirst
     *
     * @param bool $alertMeFirst
     * @return $this
     */
    public function setAlertMeFirst($alertMeFirst)
    {
        $this->alertMeFirst = $alertMeFirst;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertMeFirst()
    {
        $this->alertMeFirst = null;
        return $this;
    }

    /**
     * Getter for alertMeFirstNumberOfRings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings
     */
    public function getAlertMeFirstNumberOfRings()
    {
        return $this->alertMeFirstNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertMeFirstNumberOfRings;
    }

    /**
     * Setter for alertMeFirstNumberOfRings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings $alertMeFirstNumberOfRings
     * @return $this
     */
    public function setAlertMeFirstNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings $alertMeFirstNumberOfRings)
    {
        $this->alertMeFirstNumberOfRings = $alertMeFirstNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertMeFirstNumberOfRings()
    {
        $this->alertMeFirstNumberOfRings = null;
        return $this;
    }
}

