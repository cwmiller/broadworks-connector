<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateGracePeriodDuration
 *
 * Collaborate grace period duration.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1036","type":"sequence"}]
 */
class CollaborateGracePeriodDuration
{

    /**
     * @ElementName hours
     * @Type int
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1036
     * @MinInclusive 0
     * @MaxInclusive 23
     * @var int|null
     */
    private $hours = null;

    /**
     * @ElementName minutes
     * @Type int
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1036
     * @Pattern 0|15|30|45
     * @var int|null
     */
    private $minutes = null;

    /**
     * Getter for hours
     *
     * @return int
     */
    public function getHours()
    {
        return $this->hours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hours;
    }

    /**
     * Setter for hours
     *
     * @param int $hours
     * @return $this
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHours()
    {
        $this->hours = null;
        return $this;
    }

    /**
     * Getter for minutes
     *
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minutes;
    }

    /**
     * Setter for minutes
     *
     * @param int $minutes
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinutes()
    {
        $this->minutes = null;
        return $this;
    }


}

