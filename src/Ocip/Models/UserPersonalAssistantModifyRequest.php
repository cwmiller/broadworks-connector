<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantModifyRequest
 *
 * Modify the User Personal Assistant information.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"c6760dd4e8dfb4aeba3a11bfab1c6524:337","type":"sequence"}]
 */
class UserPersonalAssistantModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group c6760dd4e8dfb4aeba3a11bfab1c6524:337
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName presence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence
     * @Optional
     * @Group c6760dd4e8dfb4aeba3a11bfab1c6524:337
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence|null
     */
    private $presence = null;

    /**
     * @ElementName enableTransferToAttendant
     * @Type bool
     * @Optional
     * @Group c6760dd4e8dfb4aeba3a11bfab1c6524:337
     * @var bool|null
     */
    private $enableTransferToAttendant = null;

    /**
     * @ElementName attendantNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group c6760dd4e8dfb4aeba3a11bfab1c6524:337
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $attendantNumber = null;

    /**
     * @ElementName enableRingSplash
     * @Type bool
     * @Optional
     * @Group c6760dd4e8dfb4aeba3a11bfab1c6524:337
     * @var bool|null
     */
    private $enableRingSplash = null;

    /**
     * @ElementName enableExpirationTime
     * @Type bool
     * @Optional
     * @Group c6760dd4e8dfb4aeba3a11bfab1c6524:337
     * @var bool|null
     */
    private $enableExpirationTime = null;

    /**
     * @ElementName expirationTime
     * @Type string
     * @Nillable
     * @Optional
     * @Group c6760dd4e8dfb4aeba3a11bfab1c6524:337
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $expirationTime = null;

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
    public function setAttendantNumber($attendantNumber)
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
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->expirationTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expirationTime;
    }

    /**
     * Setter for expirationTime
     *
     * @param string|null $expirationTime
     * @return $this
     */
    public function setExpirationTime($expirationTime)
    {
        if ($expirationTime === null) {
            $this->expirationTime = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->expirationTime = $expirationTime;
        }
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

