<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantGetResponse22
 *
 * Response to the UserPersonalAssistantGetRequest22.
 *         The response contains the user Personal Assistant information".
 *
 * @see UserPersonalAssistantGetRequest22
 * @Groups [{"id":"f53ece1c00394ef2d3d76f532f9a9663:317","type":"sequence"}]
 */
class UserPersonalAssistantGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName presence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence
     * @Group f53ece1c00394ef2d3d76f532f9a9663:317
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence|null
     */
    private $presence = null;

    /**
     * @ElementName enableTransferToAttendant
     * @Type bool
     * @Group f53ece1c00394ef2d3d76f532f9a9663:317
     * @var bool|null
     */
    private $enableTransferToAttendant = null;

    /**
     * @ElementName attendantNumber
     * @Type string
     * @Optional
     * @Group f53ece1c00394ef2d3d76f532f9a9663:317
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $attendantNumber = null;

    /**
     * @ElementName enableRingSplash
     * @Type bool
     * @Group f53ece1c00394ef2d3d76f532f9a9663:317
     * @var bool|null
     */
    private $enableRingSplash = null;

    /**
     * @ElementName enableExpirationTime
     * @Type bool
     * @Group f53ece1c00394ef2d3d76f532f9a9663:317
     * @var bool|null
     */
    private $enableExpirationTime = null;

    /**
     * @ElementName expirationTime
     * @Type string
     * @Optional
     * @Group f53ece1c00394ef2d3d76f532f9a9663:317
     * @var string|null
     */
    private $expirationTime = null;

    /**
     * @ElementName alertMeFirst
     * @Type bool
     * @Group f53ece1c00394ef2d3d76f532f9a9663:317
     * @var bool|null
     */
    private $alertMeFirst = null;

    /**
     * @ElementName alertMeFirstNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings
     * @Group f53ece1c00394ef2d3d76f532f9a9663:317
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantAlertMeFirstNumberOfRings|null
     */
    private $alertMeFirstNumberOfRings = null;

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
     * Getter for enableExpirationTime
     *
     * @return bool
     */
    public function getEnableExpirationTime()
    {
        return $this->enableExpirationTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableExpirationTime;
    }

    /**
     * Setter for enableExpirationTime
     *
     * @param bool $enableExpirationTime
     * @return $this
     */
    public function setEnableExpirationTime($enableExpirationTime)
    {
        $this->enableExpirationTime = $enableExpirationTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableExpirationTime()
    {
        $this->enableExpirationTime = null;
        return $this;
    }

    /**
     * Getter for expirationTime
     *
     * @return string
     */
    public function getExpirationTime()
    {
        return $this->expirationTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expirationTime;
    }

    /**
     * Setter for expirationTime
     *
     * @param string $expirationTime
     * @return $this
     */
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpirationTime()
    {
        $this->expirationTime = null;
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

