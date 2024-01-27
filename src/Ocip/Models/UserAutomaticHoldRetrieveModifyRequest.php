<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticHoldRetrieveModifyRequest
 *
 * Modify the user level data associated with Automatic Hold/Retrieve.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7e6893393b21480206131a5d901c0eef:76","type":"sequence"}]
 */
class UserAutomaticHoldRetrieveModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 7e6893393b21480206131a5d901c0eef:76
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 7e6893393b21480206131a5d901c0eef:76
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName recallTimerSeconds
     * @Type int
     * @Optional
     * @Group 7e6893393b21480206131a5d901c0eef:76
     * @MinInclusive 6
     * @MaxInclusive 600
     * @var int|null
     */
    protected $recallTimerSeconds = null;

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
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for recallTimerSeconds
     *
     * @return int
     */
    public function getRecallTimerSeconds()
    {
        return $this->recallTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallTimerSeconds;
    }

    /**
     * Setter for recallTimerSeconds
     *
     * @param int $recallTimerSeconds
     * @return $this
     */
    public function setRecallTimerSeconds($recallTimerSeconds)
    {
        $this->recallTimerSeconds = $recallTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallTimerSeconds()
    {
        $this->recallTimerSeconds = null;
        return $this;
    }
}

