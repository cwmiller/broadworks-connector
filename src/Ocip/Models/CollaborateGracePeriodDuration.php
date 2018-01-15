<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateGracePeriodDuration
 *
 * Collaborate grace period duration.
 */
class CollaborateGracePeriodDuration
{

    /**
     * @ElementName hours
     * @var int|null
     */
    private $hours = null;

    /**
     * @ElementName minutes
     * @var int|null
     */
    private $minutes = null;

    /**
     * Getter for hours
     *
     * @ElementName hours
     * @return int|null
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Setter for hours
     *
     * @ElementName hours
     * @param int|null $hours
     * @return $this
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
        return $this;
    }

    /**
     * Getter for minutes
     *
     * @ElementName minutes
     * @return int|null
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Setter for minutes
     *
     * @ElementName minutes
     * @param int|null $minutes
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
        return $this;
    }


}

