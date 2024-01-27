<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantGetCriteriaResponse
 *
 * Response to the UserPersonalAssistantGetCriteriaRequest.
 *
 * @see UserPersonalAssistantGetCriteriaRequest
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:369","type":"sequence"}]
 */
class UserPersonalAssistantGetCriteriaResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:369
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:369
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName presence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:369
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence|null
     */
    protected $presence = null;

    /**
     * @ElementName enableTransferToAttendant
     * @Type bool
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:369
     * @var bool|null
     */
    protected $enableTransferToAttendant = null;

    /**
     * @ElementName attendantNumber
     * @Type string
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:369
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $attendantNumber = null;

    /**
     * @ElementName enableRingSplash
     * @Type bool
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:369
     * @var bool|null
     */
    protected $enableRingSplash = null;

    /**
     * @ElementName alertMeFirst
     * @Type bool
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:369
     * @var bool|null
     */
    protected $alertMeFirst = null;

    /**
     * @ElementName alertMeFirstNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:369
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings|null
     */
    protected $alertMeFirstNumberOfRings = null;

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
     * @return string
     */
    public function getAttendantNumber()
    {
        return $this->attendantNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attendantNumber;
    }

    /**
     * Setter for attendantNumber
     *
     * @param string $attendantNumber
     * @return $this
     */
    public function setAttendantNumber($attendantNumber)
    {
        $this->attendantNumber = $attendantNumber;
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

