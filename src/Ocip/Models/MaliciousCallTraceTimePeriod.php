<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MaliciousCallTraceTimePeriod
 *
 * Modify the user level data associated with Malicious Call Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class MaliciousCallTraceTimePeriod
{

    /**
     * @ElementName startDateTime
     * @var string|null
     */
    private $startDateTime = null;

    /**
     * @ElementName stopDateTime
     * @var string|null
     */
    private $stopDateTime = null;

    /**
     * Getter for startDateTime
     *
     * @ElementName startDateTime
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Setter for startDateTime
     *
     * @ElementName startDateTime
     * @param string|null $startDateTime
     * @return $this
     */
    public function setStartDateTime($startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Getter for stopDateTime
     *
     * @ElementName stopDateTime
     * @return string|null
     */
    public function getStopDateTime()
    {
        return $this->stopDateTime;
    }

    /**
     * Setter for stopDateTime
     *
     * @ElementName stopDateTime
     * @param string|null $stopDateTime
     * @return $this
     */
    public function setStopDateTime($stopDateTime)
    {
        $this->stopDateTime = $stopDateTime;
        return $this;
    }


}

