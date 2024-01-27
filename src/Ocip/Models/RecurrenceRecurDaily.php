<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurDaily
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4104","type":"sequence"}]
 */
class RecurrenceRecurDaily
{
    /**
     * @ElementName recurInterval
     * @Type int
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4104
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null
     */
    protected $recurInterval = null;

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

