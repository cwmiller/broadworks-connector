<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGroupGetResponse
 *
 * Response to GroupSessionAdmissionControlGroupGetRequest.
 *         Returns the profile information for the session admission control group.
 *
 * @see GroupSessionAdmissionControlGroupGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:13175","type":"sequence"}]
 */
class GroupSessionAdmissionControlGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maxSession
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxSession = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxUserTerminatingSessions = null;

    /**
     * @ElementName reservedSession
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @MinInclusive 0
     * @var int|null
     */
    protected $reservedSession = null;

    /**
     * @ElementName reservedUserOriginatingSessions
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @MinInclusive 0
     * @var int|null
     */
    protected $reservedUserOriginatingSessions = null;

    /**
     * @ElementName reservedUserTerminatingSessions
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @MinInclusive 0
     * @var int|null
     */
    protected $reservedUserTerminatingSessions = null;

    /**
     * @ElementName defaultGroup
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @var bool|null
     */
    protected $defaultGroup = null;

    /**
     * @ElementName countIntraSACGroupSessions
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @var bool|null
     */
    protected $countIntraSACGroupSessions = null;

    /**
     * @ElementName devices
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:13175
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    protected $devices = [
        
    ];

    /**
     * Getter for maxSession
     *
     * @return int
     */
    public function getMaxSession()
    {
        return $this->maxSession instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSession;
    }

    /**
     * Setter for maxSession
     *
     * @param int $maxSession
     * @return $this
     */
    public function setMaxSession($maxSession)
    {
        $this->maxSession = $maxSession;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSession()
    {
        $this->maxSession = null;
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
     * Getter for reservedSession
     *
     * @return int
     */
    public function getReservedSession()
    {
        return $this->reservedSession instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedSession;
    }

    /**
     * Setter for reservedSession
     *
     * @param int $reservedSession
     * @return $this
     */
    public function setReservedSession($reservedSession)
    {
        $this->reservedSession = $reservedSession;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReservedSession()
    {
        $this->reservedSession = null;
        return $this;
    }

    /**
     * Getter for reservedUserOriginatingSessions
     *
     * @return int
     */
    public function getReservedUserOriginatingSessions()
    {
        return $this->reservedUserOriginatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedUserOriginatingSessions;
    }

    /**
     * Setter for reservedUserOriginatingSessions
     *
     * @param int $reservedUserOriginatingSessions
     * @return $this
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions)
    {
        $this->reservedUserOriginatingSessions = $reservedUserOriginatingSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReservedUserOriginatingSessions()
    {
        $this->reservedUserOriginatingSessions = null;
        return $this;
    }

    /**
     * Getter for reservedUserTerminatingSessions
     *
     * @return int
     */
    public function getReservedUserTerminatingSessions()
    {
        return $this->reservedUserTerminatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedUserTerminatingSessions;
    }

    /**
     * Setter for reservedUserTerminatingSessions
     *
     * @param int $reservedUserTerminatingSessions
     * @return $this
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions)
    {
        $this->reservedUserTerminatingSessions = $reservedUserTerminatingSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReservedUserTerminatingSessions()
    {
        $this->reservedUserTerminatingSessions = null;
        return $this;
    }

    /**
     * Getter for defaultGroup
     *
     * @return bool
     */
    public function getDefaultGroup()
    {
        return $this->defaultGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultGroup;
    }

    /**
     * Setter for defaultGroup
     *
     * @param bool $defaultGroup
     * @return $this
     */
    public function setDefaultGroup($defaultGroup)
    {
        $this->defaultGroup = $defaultGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultGroup()
    {
        $this->defaultGroup = null;
        return $this;
    }

    /**
     * Getter for countIntraSACGroupSessions
     *
     * @return bool
     */
    public function getCountIntraSACGroupSessions()
    {
        return $this->countIntraSACGroupSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countIntraSACGroupSessions;
    }

    /**
     * Setter for countIntraSACGroupSessions
     *
     * @param bool $countIntraSACGroupSessions
     * @return $this
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions)
    {
        $this->countIntraSACGroupSessions = $countIntraSACGroupSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountIntraSACGroupSessions()
    {
        $this->countIntraSACGroupSessions = null;
        return $this;
    }

    /**
     * Getter for devices
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    public function getDevices()
    {
        return $this->devices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->devices;
    }

    /**
     * Setter for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[] $devices
     * @return $this
     */
    public function setDevices(array $devices)
    {
        $this->devices = $devices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDevices()
    {
        $this->devices = null;
        return $this;
    }

    /**
     * Adder for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $devices
     * @return $this
     */
    public function addDevices($devices)
    {
        $this->devices[] = $devices;
        return $this;
    }
}

