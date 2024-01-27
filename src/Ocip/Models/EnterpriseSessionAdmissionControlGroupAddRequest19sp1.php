<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSessionAdmissionControlGroupAddRequest19sp1
 *
 * Request to add a session admission control group for the enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note that to provision the accessInfoPattern element, the
 *         captureAccessInfoInPaniHeader system parameter needs to be set to "true".
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:597","type":"sequence"}]
 */
class EnterpriseSessionAdmissionControlGroupAddRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName maxSession
     * @Type int
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxSession = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @Type int
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Type int
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinInclusive 0
     * @var int|null
     */
    protected $maxUserTerminatingSessions = null;

    /**
     * @ElementName reservedSession
     * @Type int
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinInclusive 0
     * @var int|null
     */
    protected $reservedSession = null;

    /**
     * @ElementName reservedUserOriginatingSessions
     * @Type int
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinInclusive 0
     * @var int|null
     */
    protected $reservedUserOriginatingSessions = null;

    /**
     * @ElementName reservedUserTerminatingSessions
     * @Type int
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinInclusive 0
     * @var int|null
     */
    protected $reservedUserTerminatingSessions = null;

    /**
     * @ElementName becomeDefaultGroup
     * @Type bool
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @var bool|null
     */
    protected $becomeDefaultGroup = null;

    /**
     * @ElementName countIntraSACGroupSessions
     * @Type bool
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @var bool|null
     */
    protected $countIntraSACGroupSessions = null;

    /**
     * @ElementName devices
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice
     * @Array
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    protected $devices = [
        
    ];

    /**
     * @ElementName blockEmergencyAndRepairCallsDueToSACLimits
     * @Type bool
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @var bool|null
     */
    protected $blockEmergencyAndRepairCallsDueToSACLimits = null;

    /**
     * @ElementName mediaGroupName
     * @Type string
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $mediaGroupName = null;

    /**
     * @ElementName accessInfoPattern
     * @Type string
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:597
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $accessInfoPattern = null;

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
     * Getter for devices
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    public function getDevices()
    {
        return $this->devices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->devices;
    }

    /**
     * Setter for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[] $devices
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice $devices
     * @return $this
     */
    public function addDevices($devices)
    {
        $this->devices[] = $devices;
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
     * @return string
     */
    public function getMediaGroupName()
    {
        return $this->mediaGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaGroupName;
    }

    /**
     * Setter for mediaGroupName
     *
     * @param string $mediaGroupName
     * @return $this
     */
    public function setMediaGroupName($mediaGroupName)
    {
        $this->mediaGroupName = $mediaGroupName;
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
     * @return string
     */
    public function getAccessInfoPattern()
    {
        return $this->accessInfoPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessInfoPattern;
    }

    /**
     * Setter for accessInfoPattern
     *
     * @param string $accessInfoPattern
     * @return $this
     */
    public function setAccessInfoPattern($accessInfoPattern)
    {
        $this->accessInfoPattern = $accessInfoPattern;
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

