<?php

namespace CWM\BroadWorksConnector\Ocip\Models\Recurrence;

/**
 * RecurDaily
 */
class RecurDaily
{

    /**
     * @ElementName recurInterval
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * Getter for recurInterval
     *
     * @ElementName recurInterval
     * @return int|null
     */
    public function getRecurInterval()
    {
        return $this->recurInterval;
    }

    /**
     * Setter for recurInterval
     *
     * @ElementName recurInterval
     * @param int|null $recurInterval
     * @return $this
     */
    public function setRecurInterval($recurInterval)
    {
        $this->recurInterval = $recurInterval;
        return $this;
    }


}

