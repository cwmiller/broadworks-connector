<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurDaily
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2607","type":"sequence"}]
 */
class RecurrenceRecurDaily
{

    /**
     * @ElementName recurInterval
     * @Type int
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:2607
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * Getter for recurInterval
     *
     * @return int
     */
    public function getRecurInterval()
    {
        return $this->recurInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurInterval;
    }

    /**
     * Setter for recurInterval
     *
     * @param int $recurInterval
     * @return $this
     */
    public function setRecurInterval($recurInterval)
    {
        $this->recurInterval = $recurInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurInterval()
    {
        $this->recurInterval = null;
        return $this;
    }


}

