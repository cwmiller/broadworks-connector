<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MaliciousCallTraceTimePeriod
 *
 * Modify the user level data associated with Malicious Call Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"be7f3162f133f8d7fcc75e712b0258e6:213","type":"sequence"}]
 */
class MaliciousCallTraceTimePeriod
{
    /**
     * @ElementName startDateTime
     * @Type string
     * @Group be7f3162f133f8d7fcc75e712b0258e6:213
     * @var string|null
     */
    protected $startDateTime = null;

    /**
     * @ElementName stopDateTime
     * @Type string
     * @Group be7f3162f133f8d7fcc75e712b0258e6:213
     * @var string|null
     */
    protected $stopDateTime = null;

    /**
     * Getter for startDateTime
     *
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->startDateTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startDateTime;
    }

    /**
     * Setter for startDateTime
     *
     * @param string $startDateTime
     * @return $this
     */
    public function setStartDateTime($startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartDateTime()
    {
        $this->startDateTime = null;
        return $this;
    }

    /**
     * Getter for stopDateTime
     *
     * @return string
     */
    public function getStopDateTime()
    {
        return $this->stopDateTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stopDateTime;
    }

    /**
     * Setter for stopDateTime
     *
     * @param string $stopDateTime
     * @return $this
     */
    public function setStopDateTime($stopDateTime)
    {
        $this->stopDateTime = $stopDateTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStopDateTime()
    {
        $this->stopDateTime = null;
        return $this;
    }
}

