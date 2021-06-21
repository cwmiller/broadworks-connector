<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGroupModifyRequest
 *
 * Request to modify a session admission control group for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note that to provision the accessInfoPattern element, the
 *         captureAccessInfoInPaniHeader system parameter needs to be set to "true".
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8214","type":"sequence"}]
 */
class GroupSessionAdmissionControlGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName maxSession
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinInclusive 0
     * @var int|null
     */
    private $maxSession = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxUserTerminatingSessions = null;

    /**
     * @ElementName reservedSession
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinInclusive 0
     * @var int|null
     */
    private $reservedSession = null;

    /**
     * @ElementName reservedUserOriginatingSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $reservedUserOriginatingSessions = null;

    /**
     * @ElementName reservedUserTerminatingSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $reservedUserTerminatingSessions = null;

    /**
     * @ElementName becomeDefaultGroup
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @var bool|null
     */
    private $becomeDefaultGroup = null;

    /**
     * @ElementName countIntraSACGroupSessions
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @var bool|null
     */
    private $countIntraSACGroupSessions = null;

    /**
     * @ElementName deviceList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceList
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceList = null;

    /**
     * @ElementName blockEmergencyAndRepairCallsDueToSACLimits
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @var bool|null
     */
    private $blockEmergencyAndRepairCallsDueToSACLimits = null;

    /**
     * @ElementName mediaGroupName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mediaGroupName = null;

    /**
     * @ElementName accessInfoPattern
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8214
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessInfoPattern = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }

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
     * @return int|null
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxUserOriginatingSessions;
    }

    /**
     * Setter for maxUserOriginatingSessions
     *
     * @param int|null $maxUserOriginatingSessions
     * @return $this
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        if ($maxUserOriginatingSessions === null) {
            $this->maxUserOriginatingSessions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxUserOriginatingSessions = $maxUserOriginatingSessions;
        }
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
     * @return int|null
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxUserTerminatingSessions;
    }

    /**
     * Setter for maxUserTerminatingSessions
     *
     * @param int|null $maxUserTerminatingSessions
     * @return $this
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        if ($maxUserTerminatingSessions === null) {
            $this->maxUserTerminatingSessions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxUserTerminatingSessions = $maxUserTerminatingSessions;
        }
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
     * @return int|null
     */
    public function getReservedUserOriginatingSessions()
    {
        return $this->reservedUserOriginatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedUserOriginatingSessions;
    }

    /**
     * Setter for reservedUserOriginatingSessions
     *
     * @param int|null $reservedUserOriginatingSessions
     * @return $this
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions = null)
    {
        if ($reservedUserOriginatingSessions === null) {
            $this->reservedUserOriginatingSessions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->reservedUserOriginatingSessions = $reservedUserOriginatingSessions;
        }
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
     * @return int|null
     */
    public function getReservedUserTerminatingSessions()
    {
        return $this->reservedUserTerminatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedUserTerminatingSessions;
    }

    /**
     * Setter for reservedUserTerminatingSessions
     *
     * @param int|null $reservedUserTerminatingSessions
     * @return $this
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions = null)
    {
        if ($reservedUserTerminatingSessions === null) {
            $this->reservedUserTerminatingSessions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->reservedUserTerminatingSessions = $reservedUserTerminatingSessions;
        }
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
     * Getter for becomeDefaultGroup
     *
     * @return bool
     */
    public function getBecomeDefaultGroup()
    {
        return $this->becomeDefaultGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeDefaultGroup;
    }

    /**
     * Setter for becomeDefaultGroup
     *
     * @param bool $becomeDefaultGroup
     * @return $this
     */
    public function setBecomeDefaultGroup($becomeDefaultGroup)
    {
        $this->becomeDefaultGroup = $becomeDefaultGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeDefaultGroup()
    {
        $this->becomeDefaultGroup = null;
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
     * Getter for deviceList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceList|null
     */
    public function getDeviceList()
    {
        return $this->deviceList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceList;
    }

    /**
     * Setter for deviceList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceList|null $deviceList
     * @return $this
     */
    public function setDeviceList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceList $deviceList = null)
    {
        if ($deviceList === null) {
            $this->deviceList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceList = $deviceList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceList()
    {
        $this->deviceList = null;
        return $this;
    }

    /**
     * Getter for blockEmergencyAndRepairCallsDueToSACLimits
     *
     * @return bool
     */
    public function getBlockEmergencyAndRepairCallsDueToSACLimits()
    {
        return $this->blockEmergencyAndRepairCallsDueToSACLimits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blockEmergencyAndRepairCallsDueToSACLimits;
    }

    /**
     * Setter for blockEmergencyAndRepairCallsDueToSACLimits
     *
     * @param bool $blockEmergencyAndRepairCallsDueToSACLimits
     * @return $this
     */
    public function setBlockEmergencyAndRepairCallsDueToSACLimits($blockEmergencyAndRepairCallsDueToSACLimits)
    {
        $this->blockEmergencyAndRepairCallsDueToSACLimits = $blockEmergencyAndRepairCallsDueToSACLimits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlockEmergencyAndRepairCallsDueToSACLimits()
    {
        $this->blockEmergencyAndRepairCallsDueToSACLimits = null;
        return $this;
    }

    /**
     * Getter for mediaGroupName
     *
     * @return string|null
     */
    public function getMediaGroupName()
    {
        return $this->mediaGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaGroupName;
    }

    /**
     * Setter for mediaGroupName
     *
     * @param string|null $mediaGroupName
     * @return $this
     */
    public function setMediaGroupName($mediaGroupName = null)
    {
        if ($mediaGroupName === null) {
            $this->mediaGroupName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mediaGroupName = $mediaGroupName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaGroupName()
    {
        $this->mediaGroupName = null;
        return $this;
    }

    /**
     * Getter for accessInfoPattern
     *
     * @return string|null
     */
    public function getAccessInfoPattern()
    {
        return $this->accessInfoPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessInfoPattern;
    }

    /**
     * Setter for accessInfoPattern
     *
     * @param string|null $accessInfoPattern
     * @return $this
     */
    public function setAccessInfoPattern($accessInfoPattern = null)
    {
        if ($accessInfoPattern === null) {
            $this->accessInfoPattern = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessInfoPattern = $accessInfoPattern;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessInfoPattern()
    {
        $this->accessInfoPattern = null;
        return $this;
    }


}

