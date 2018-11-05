<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSessionAdmissionControlGroupModifyRequest
 *
 * Request to modify a session admission control group for the enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note that to provision the accessInfoPattern element, the
 *         captureAccessInfoInPaniHeader system parameter needs to be set to
 * "true".
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseSessionAdmissionControlGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxUserTerminatingSessions = null;

    /**
     * @ElementName reservedSession
     * @var int|null
     */
    private $reservedSession = null;

    /**
     * @ElementName reservedUserOriginatingSessions
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $reservedUserOriginatingSessions = null;

    /**
     * @ElementName reservedUserTerminatingSessions
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseDeviceList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceList = null;

    /**
     * @ElementName blockEmergencyAndRepairCallsDueToSACLimits
     * @var bool|null
     */
    private $blockEmergencyAndRepairCallsDueToSACLimits = null;

    /**
     * @ElementName mediaGroupName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mediaGroupName = null;

    /**
     * @ElementName accessInfoPattern
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessInfoPattern = null;

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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions;
    }

    /**
     * Setter for maxUserOriginatingSessions
     *
     * @ElementName maxUserOriginatingSessions
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxUserOriginatingSessions
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions;
    }

    /**
     * Setter for maxUserTerminatingSessions
     *
     * @ElementName maxUserTerminatingSessions
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxUserTerminatingSessions
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getReservedUserOriginatingSessions()
    {
        return $this->reservedUserOriginatingSessions;
    }

    /**
     * Setter for reservedUserOriginatingSessions
     *
     * @ElementName reservedUserOriginatingSessions
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $reservedUserOriginatingSessions
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getReservedUserTerminatingSessions()
    {
        return $this->reservedUserTerminatingSessions;
    }

    /**
     * Setter for reservedUserTerminatingSessions
     *
     * @ElementName reservedUserTerminatingSessions
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $reservedUserTerminatingSessions
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseDeviceList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeviceList()
    {
        return $this->deviceList;
    }

    /**
     * Setter for deviceList
     *
     * @ElementName deviceList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseDeviceList|null|\CWM\BroadWorksConnector\Ocip\Nil $deviceList
     * @return $this
     */
    public function setDeviceList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementEnterpriseDeviceList $deviceList)
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

    /**
     * Getter for mediaGroupName
     *
     * @ElementName mediaGroupName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMediaGroupName()
    {
        return $this->mediaGroupName;
    }

    /**
     * Setter for mediaGroupName
     *
     * @ElementName mediaGroupName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $mediaGroupName
     * @return $this
     */
    public function setMediaGroupName($mediaGroupName)
    {
        $this->mediaGroupName = $mediaGroupName;
        return $this;
    }

    /**
     * Getter for accessInfoPattern
     *
     * @ElementName accessInfoPattern
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessInfoPattern()
    {
        return $this->accessInfoPattern;
    }

    /**
     * Setter for accessInfoPattern
     *
     * @ElementName accessInfoPattern
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $accessInfoPattern
     * @return $this
     */
    public function setAccessInfoPattern($accessInfoPattern)
    {
        $this->accessInfoPattern = $accessInfoPattern;
        return $this;
    }


}

