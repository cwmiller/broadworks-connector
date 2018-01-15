<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGroupModifyRequest
 *
 * Request to modify a session admission control group for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupSessionAdmissionControlGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

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
     * @ElementName becomeDefaultGroup
     * @var bool|null
     */
    private $becomeDefaultGroup = null;

    /**
     * @ElementName countIntraSACGroupSessions
     * @var bool|null
     */
    private $countIntraSACGroupSessions = null;

    /**
     * @ElementName deviceList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceList|null
     */
    private $deviceList = null;

    /**
     * @ElementName blockEmergencyAndRepairCallsDueToSACLimits
     * @var bool|null
     */
    private $blockEmergencyAndRepairCallsDueToSACLimits = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

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
     * Getter for becomeDefaultGroup
     *
     * @ElementName becomeDefaultGroup
     * @return bool|null
     */
    public function getBecomeDefaultGroup()
    {
        return $this->becomeDefaultGroup;
    }

    /**
     * Setter for becomeDefaultGroup
     *
     * @ElementName becomeDefaultGroup
     * @param bool|null $becomeDefaultGroup
     * @return $this
     */
    public function setBecomeDefaultGroup($becomeDefaultGroup)
    {
        $this->becomeDefaultGroup = $becomeDefaultGroup;
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
     * Getter for deviceList
     *
     * @ElementName deviceList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceList|null
     */
    public function getDeviceList()
    {
        return $this->deviceList;
    }

    /**
     * Setter for deviceList
     *
     * @ElementName deviceList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceList|null $deviceList
     * @return $this
     */
    public function setDeviceList($deviceList)
    {
        $this->deviceList = $deviceList;
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


}

