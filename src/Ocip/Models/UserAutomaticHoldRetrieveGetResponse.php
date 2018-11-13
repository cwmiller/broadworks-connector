<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticHoldRetrieveGetResponse
 *
 * Response to UserAutomaticHoldRetrieveGetRequest.
 *
 * @see UserAutomaticHoldRetrieveGetRequest
 */
class UserAutomaticHoldRetrieveGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName recallTimerSeconds
     * @Type int
     * @var int|null
     */
    private $recallTimerSeconds = null;

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

