<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticHoldRetrieveGetResponse
 *
 * Response to UserAutomaticHoldRetrieveGetRequest.
 *
 * @see UserAutomaticHoldRetrieveGetRequest
 * @Groups [{"id":"7e6893393b21480206131a5d901c0eef:59","type":"sequence"}]
 */
class UserAutomaticHoldRetrieveGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 7e6893393b21480206131a5d901c0eef:59
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName recallTimerSeconds
     * @Type int
     * @Group 7e6893393b21480206131a5d901c0eef:59
     * @MinInclusive 6
     * @MaxInclusive 600
     * @var int|null
     */
    protected $recallTimerSeconds = null;

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

