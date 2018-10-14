<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGroupGetResponse21sp1
 *
 * Response to GroupSessionAdmissionControlGroupGetRequest21sp1.
 *         Returns the profile information for the session admission control group.
 *
 * @see GroupSessionAdmissionControlGroupGetRequest21sp1
 */
class GroupSessionAdmissionControlGroupGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxSession
     * @var int|null
     */
    private $maxSession = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @var int|null
     */
    private $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @var int|null
     */
    private $maxUserTerminatingSessions = null;

    /**
     * @ElementName reservedSession
     * @var int|null
     */
    private $reservedSession = null;

    /**
     * @ElementName reservedUserOriginatingSessions
     * @var int|null
     */
    private $reservedUserOriginatingSessions = null;

    /**
     * @ElementName reservedUserTerminatingSessions
     * @var int|null
     */
    private $reservedUserTerminatingSessions = null;

    /**
     * @ElementName defaultGroup
     * @var bool|null
     */
    private $defaultGroup = null;

    /**
     * @ElementName countIntraSACGroupSessions
     * @var bool|null
     */
    private $countIntraSACGroupSessions = null;

    /**
     * @ElementName devices
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    private $devices = array(
        
    );

    /**
     * @ElementName blockEmergencyAndRepairCallsDueToSACLimits
     * @var bool|null
     */
    private $blockEmergencyAndRepairCallsDueToSACLimits = null;

    /**
     * @ElementName mediaGroupName
     * @var string|null
     */
    private $mediaGroupName = null;

    /**
     * Getter for maxSession
     *
     * @ElementName maxSession
     * @return int|null
     */
    public function getMaxSession()
    {
        return $this->maxSession;
    }

    /**
     * Setter for maxSession
     *
     * @ElementName maxSession
     * @param int|null $maxSession
     * @return $this
     */
    public function setMaxSession($maxSession)
    {
        $this->maxSession = $maxSession;
        return $this;
    }

    /**
     * Getter for maxUserOriginatingSessions
     *
     * @ElementName maxUserOriginatingSessions
     * @return int|null
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions;
    }

    /**
     * Setter for maxUserOriginatingSessions
     *
     * @ElementName maxUserOriginatingSessions
     * @param int|null $maxUserOriginatingSessions
     * @return $this
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions)
    {
        $this->maxUserOriginatingSessions = $maxUserOriginatingSessions;
        return $this;
    }

    /**
     * Getter for maxUserTerminatingSessions
     *
     * @ElementName maxUserTerminatingSessions
     * @return int|null
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions;
    }

    /**
     * Setter for maxUserTerminatingSessions
     *
     * @ElementName maxUserTerminatingSessions
     * @param int|null $maxUserTerminatingSessions
     * @return $this
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions)
    {
        $this->maxUserTerminatingSessions = $maxUserTerminatingSessions;
        return $this;
    }

    /**
     * Getter for reservedSession
     *
     * @ElementName reservedSession
     * @return int|null
     */
    public function getReservedSession()
    {
        return $this->reservedSession;
    }

    /**
     * Setter for reservedSession
     *
     * @ElementName reservedSession
     * @param int|null $reservedSession
     * @return $this
     */
    public function setReservedSession($reservedSession)
    {
        $this->reservedSession = $reservedSession;
        return $this;
    }

    /**
     * Getter for reservedUserOriginatingSessions
     *
     * @ElementName reservedUserOriginatingSessions
     * @return int|null
     */
    public function getReservedUserOriginatingSessions()
    {
        return $this->reservedUserOriginatingSessions;
    }

    /**
     * Setter for reservedUserOriginatingSessions
     *
     * @ElementName reservedUserOriginatingSessions
     * @param int|null $reservedUserOriginatingSessions
     * @return $this
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions)
    {
        $this->reservedUserOriginatingSessions = $reservedUserOriginatingSessions;
        return $this;
    }

    /**
     * Getter for reservedUserTerminatingSessions
     *
     * @ElementName reservedUserTerminatingSessions
     * @return int|null
     */
    public function getReservedUserTerminatingSessions()
    {
        return $this->reservedUserTerminatingSessions;
    }

    /**
     * Setter for reservedUserTerminatingSessions
     *
     * @ElementName reservedUserTerminatingSessions
     * @param int|null $reservedUserTerminatingSessions
     * @return $this
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions)
    {
        $this->reservedUserTerminatingSessions = $reservedUserTerminatingSessions;
        return $this;
    }

    /**
     * Getter for defaultGroup
     *
     * @ElementName defaultGroup
     * @return bool|null
     */
    public function getDefaultGroup()
    {
        return $this->defaultGroup;
    }

    /**
     * Setter for defaultGroup
     *
     * @ElementName defaultGroup
     * @param bool|null $defaultGroup
     * @return $this
     */
    public function setDefaultGroup($defaultGroup)
    {
        $this->defaultGroup = $defaultGroup;
        return $this;
    }

    /**
     * Getter for countIntraSACGroupSessions
     *
     * @ElementName countIntraSACGroupSessions
     * @return bool|null
     */
    public function getCountIntraSACGroupSessions()
    {
        return $this->countIntraSACGroupSessions;
    }

    /**
     * Setter for countIntraSACGroupSessions
     *
     * @ElementName countIntraSACGroupSessions
     * @param bool|null $countIntraSACGroupSessions
     * @return $this
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions)
    {
        $this->countIntraSACGroupSessions = $countIntraSACGroupSessions;
        return $this;
    }

    /**
     * Getter for devices
     *
     * @ElementName devices
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Setter for devices
     *
     * @ElementName devices
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[] $devices
     * @return $this
     */
    public function setDevices(array $devices)
    {
        $this->devices = $devices;
        return $this;
    }

    /**
     * Adder for devices
     *
     * @ElementName devices
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $devices
     * @return $this
     */
    public function addDevices($devices)
    {
        $this->devices []= $devices;
        return $this;
    }

    /**
     * Getter for blockEmergencyAndRepairCallsDueToSACLimits
     *
     * @ElementName blockEmergencyAndRepairCallsDueToSACLimits
     * @return bool|null
     */
    public function getBlockEmergencyAndRepairCallsDueToSACLimits()
    {
        return $this->blockEmergencyAndRepairCallsDueToSACLimits;
    }

    /**
     * Setter for blockEmergencyAndRepairCallsDueToSACLimits
     *
     * @ElementName blockEmergencyAndRepairCallsDueToSACLimits
     * @param bool|null $blockEmergencyAndRepairCallsDueToSACLimits
     * @return $this
     */
    public function setBlockEmergencyAndRepairCallsDueToSACLimits($blockEmergencyAndRepairCallsDueToSACLimits)
    {
        $this->blockEmergencyAndRepairCallsDueToSACLimits = $blockEmergencyAndRepairCallsDueToSACLimits;
        return $this;
    }

    /**
     * Getter for mediaGroupName
     *
     * @ElementName mediaGroupName
     * @return string|null
     */
    public function getMediaGroupName()
    {
        return $this->mediaGroupName;
    }

    /**
     * Setter for mediaGroupName
     *
     * @ElementName mediaGroupName
     * @param string|null $mediaGroupName
     * @return $this
     */
    public function setMediaGroupName($mediaGroupName)
    {
        $this->mediaGroupName = $mediaGroupName;
        return $this;
    }


}

