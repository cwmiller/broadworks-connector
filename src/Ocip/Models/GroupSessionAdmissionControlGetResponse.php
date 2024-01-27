<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGetResponse
 *
 * Response to the GroupSessionAdmissionControlGetRequest.
 *         The response contains the session admission control capacity allocated for the group.
 *
 * @see GroupSessionAdmissionControlGetRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7763","type":"sequence"}]
 */
class GroupSessionAdmissionControlGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName restrictAggregateSessions
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:7763
     * @var bool|null
     */
    protected $restrictAggregateSessions = null;

    /**
     * @ElementName maxSessions
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:7763
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxSessions = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:7763
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:7763
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxUserTerminatingSessions = null;

    /**
     * @ElementName countIntraGroupSessions
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:7763
     * @var bool|null
     */
    protected $countIntraGroupSessions = null;

    /**
     * Getter for restrictAggregateSessions
     *
     * @return bool
     */
    public function getRestrictAggregateSessions()
    {
        return $this->restrictAggregateSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictAggregateSessions;
    }

    /**
     * Setter for restrictAggregateSessions
     *
     * @param bool $restrictAggregateSessions
     * @return $this
     */
    public function setRestrictAggregateSessions($restrictAggregateSessions)
    {
        $this->restrictAggregateSessions = $restrictAggregateSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictAggregateSessions()
    {
        $this->restrictAggregateSessions = null;
        return $this;
    }

    /**
     * Getter for maxSessions
     *
     * @return int
     */
    public function getMaxSessions()
    {
        return $this->maxSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSessions;
    }

    /**
     * Setter for maxSessions
     *
     * @param int $maxSessions
     * @return $this
     */
    public function setMaxSessions($maxSessions)
    {
        $this->maxSessions = $maxSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSessions()
    {
        $this->maxSessions = null;
        return $this;
    }

    /**
     * Getter for maxUserOriginatingSessions
     *
     * @return int
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxUserOriginatingSessions;
    }

    /**
     * Setter for maxUserOriginatingSessions
     *
     * @param int $maxUserOriginatingSessions
     * @return $this
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions)
    {
        $this->maxUserOriginatingSessions = $maxUserOriginatingSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxUserOriginatingSessions()
    {
        $this->maxUserOriginatingSessions = null;
        return $this;
    }

    /**
     * Getter for maxUserTerminatingSessions
     *
     * @return int
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxUserTerminatingSessions;
    }

    /**
     * Setter for maxUserTerminatingSessions
     *
     * @param int $maxUserTerminatingSessions
     * @return $this
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions)
    {
        $this->maxUserTerminatingSessions = $maxUserTerminatingSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxUserTerminatingSessions()
    {
        $this->maxUserTerminatingSessions = null;
        return $this;
    }

    /**
     * Getter for countIntraGroupSessions
     *
     * @return bool
     */
    public function getCountIntraGroupSessions()
    {
        return $this->countIntraGroupSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countIntraGroupSessions;
    }

    /**
     * Setter for countIntraGroupSessions
     *
     * @param bool $countIntraGroupSessions
     * @return $this
     */
    public function setCountIntraGroupSessions($countIntraGroupSessions)
    {
        $this->countIntraGroupSessions = $countIntraGroupSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountIntraGroupSessions()
    {
        $this->countIntraGroupSessions = null;
        return $this;
    }
}

