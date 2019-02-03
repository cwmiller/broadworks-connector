<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantGetResponse
 *
 * Response to the UserPersonalAssistantGetRequest.
 *                 The response contains the user Personal Assistant information".
 *
 *                 Replaced by: UserPersonalAssistantGetResponse22
 *
 * @see UserPersonalAssistantGetRequest
 * @see UserPersonalAssistantGetResponse22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:7508","type":"sequence"}]
 */
class UserPersonalAssistantGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName presence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7508
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence|null
     */
    private $presence = null;

    /**
     * @ElementName enableTransferToAttendant
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7508
     * @var bool|null
     */
    private $enableTransferToAttendant = null;

    /**
     * @ElementName attendantNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7508
     * @var string|null
     */
    private $attendantNumber = null;

    /**
     * @ElementName enableRingSplash
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7508
     * @var bool|null
     */
    private $enableRingSplash = null;

    /**
     * @ElementName enableExpirationTime
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7508
     * @var bool|null
     */
    private $enableExpirationTime = null;

    /**
     * @ElementName expirationTime
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7508
     * @var string|null
     */
    private $expirationTime = null;

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


}

