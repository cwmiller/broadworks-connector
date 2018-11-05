<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupModifyInstanceRequest14sp4
 *
 * Modify a Trunk Group Instance in a group.
 *         The access device cannot be modified or cleared if there are any users
 * assigned to the Trunk Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupTrunkGroupModifyInstanceRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName pilotUserId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $pilotUserId = null;

    /**
     * @ElementName department
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $department = null;

    /**
     * @ElementName accessDevice
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDevice = null;

    /**
     * @ElementName maxActiveCalls
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @var bool|null
     */
    private $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededRerouteTrunkGroupKey = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @var int|null
     */
    private $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @var int|null
     */
    private $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName unreachableDestinationAction
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationAction = null;

    /**
     * @ElementName unreachableDestinationForwardAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationForwardAddress = null;

    /**
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationRerouteTrunkGroupKey = null;

    /**
     * @ElementName unreachableDestinationTrapInitialCalls
     * @var int|null
     */
    private $unreachableDestinationTrapInitialCalls = null;

    /**
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @var int|null
     */
    private $unreachableDestinationTrapOffsetCalls = null;

    /**
     * @ElementName invitationTimeout
     * @var int|null
     */
    private $invitationTimeout = null;

    /**
     * @ElementName requireAuthentication
     * @var bool|null
     */
    private $requireAuthentication = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAuthenticationPassword = null;

    /**
     * @ElementName hostedUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $hostedUserIdList = null;

    /**
     * @ElementName trunkGroupIdentity
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $trunkGroupIdentity = null;

    /**
     * @ElementName otgDtgIdentity
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $otgDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentity
     * @var bool|null
     */
    private $includeTrunkGroupIdentity = null;

    /**
     * @ElementName includeDtgIdentity
     * @var bool|null
     */
    private $includeDtgIdentity = null;

    /**
     * @ElementName enableNetworkAddressIdentity
     * @var bool|null
     */
    private $enableNetworkAddressIdentity = null;

    /**
     * @ElementName allowUnscreenedCalls
     * @var bool|null
     */
    private $allowUnscreenedCalls = null;

    /**
     * @ElementName allowUnscreenedEmergencyCalls
     * @var bool|null
     */
    private $allowUnscreenedEmergencyCalls = null;

    /**
     * @ElementName usePilotUserCallingLineIdentity
     * @var bool|null
     */
    private $usePilotUserCallingLineIdentity = null;

    /**
     * @ElementName usePilotUserChargeNumber
     * @var bool|null
     */
    private $usePilotUserChargeNumber = null;

    /**
     * @ElementName callForwardingAlwaysAction
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysAction = null;

    /**
     * @ElementName callForwardingAlwaysForwardAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysForwardAddress = null;

    /**
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysRerouteTrunkGroupKey = null;

    /**
     * Getter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
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
     * Getter for pilotUserId
     *
     * @ElementName pilotUserId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPilotUserId()
    {
        return $this->pilotUserId;
    }

    /**
     * Setter for pilotUserId
     *
     * @ElementName pilotUserId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $pilotUserId
     * @return $this
     */
    public function setPilotUserId($pilotUserId)
    {
        $this->pilotUserId = $pilotUserId;
        return $this;
    }

    /**
     * Getter for department
     *
     * @ElementName department
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Setter for department
     *
     * @ElementName department
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil $department
     * @return $this
     */
    public function setDepartment(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Getter for accessDevice
     *
     * @ElementName accessDevice
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @ElementName accessDevice
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null|\CWM\BroadWorksConnector\Ocip\Nil $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * Getter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @return int|null
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @param int|null $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * Getter for maxIncomingCalls
     *
     * @ElementName maxIncomingCalls
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls;
    }

    /**
     * Setter for maxIncomingCalls
     *
     * @ElementName maxIncomingCalls
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxIncomingCalls
     * @return $this
     */
    public function setMaxIncomingCalls($maxIncomingCalls)
    {
        $this->maxIncomingCalls = $maxIncomingCalls;
        return $this;
    }

    /**
     * Getter for maxOutgoingCalls
     *
     * @ElementName maxOutgoingCalls
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls;
    }

    /**
     * Setter for maxOutgoingCalls
     *
     * @ElementName maxOutgoingCalls
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxOutgoingCalls
     * @return $this
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls)
    {
        $this->maxOutgoingCalls = $maxOutgoingCalls;
        return $this;
    }

    /**
     * Getter for enableBursting
     *
     * @ElementName enableBursting
     * @return bool|null
     */
    public function getEnableBursting()
    {
        return $this->enableBursting;
    }

    /**
     * Setter for enableBursting
     *
     * @ElementName enableBursting
     * @param bool|null $enableBursting
     * @return $this
     */
    public function setEnableBursting($enableBursting)
    {
        $this->enableBursting = $enableBursting;
        return $this;
    }

    /**
     * Getter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        return $this;
    }

    /**
     * Getter for burstingMaxIncomingCalls
     *
     * @ElementName burstingMaxIncomingCalls
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getBurstingMaxIncomingCalls()
    {
        return $this->burstingMaxIncomingCalls;
    }

    /**
     * Setter for burstingMaxIncomingCalls
     *
     * @ElementName burstingMaxIncomingCalls
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $burstingMaxIncomingCalls
     * @return $this
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls)
    {
        $this->burstingMaxIncomingCalls = $burstingMaxIncomingCalls;
        return $this;
    }

    /**
     * Getter for burstingMaxOutgoingCalls
     *
     * @ElementName burstingMaxOutgoingCalls
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return $this->burstingMaxOutgoingCalls;
    }

    /**
     * Setter for burstingMaxOutgoingCalls
     *
     * @ElementName burstingMaxOutgoingCalls
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $burstingMaxOutgoingCalls
     * @return $this
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls)
    {
        $this->burstingMaxOutgoingCalls = $burstingMaxOutgoingCalls;
        return $this;
    }

    /**
     * Getter for capacityExceededAction
     *
     * @ElementName capacityExceededAction
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCapacityExceededAction()
    {
        return $this->capacityExceededAction;
    }

    /**
     * Setter for capacityExceededAction
     *
     * @ElementName capacityExceededAction
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null|\CWM\BroadWorksConnector\Ocip\Nil $capacityExceededAction
     * @return $this
     */
    public function setCapacityExceededAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction $capacityExceededAction)
    {
        $this->capacityExceededAction = $capacityExceededAction;
        return $this;
    }

    /**
     * Getter for capacityExceededForwardAddress
     *
     * @ElementName capacityExceededForwardAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCapacityExceededForwardAddress()
    {
        return $this->capacityExceededForwardAddress;
    }

    /**
     * Setter for capacityExceededForwardAddress
     *
     * @ElementName capacityExceededForwardAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $capacityExceededForwardAddress
     * @return $this
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress)
    {
        $this->capacityExceededForwardAddress = $capacityExceededForwardAddress;
        return $this;
    }

    /**
     * Getter for capacityExceededRerouteTrunkGroupKey
     *
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return $this->capacityExceededRerouteTrunkGroupKey;
    }

    /**
     * Setter for capacityExceededRerouteTrunkGroupKey
     *
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil $capacityExceededRerouteTrunkGroupKey
     * @return $this
     */
    public function setCapacityExceededRerouteTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $capacityExceededRerouteTrunkGroupKey)
    {
        $this->capacityExceededRerouteTrunkGroupKey = $capacityExceededRerouteTrunkGroupKey;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @return int|null
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @param int|null $capacityExceededTrapInitialCalls
     * @return $this
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $this->capacityExceededTrapInitialCalls = $capacityExceededTrapInitialCalls;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @return int|null
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @param int|null $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
        return $this;
    }

    /**
     * Getter for unreachableDestinationAction
     *
     * @ElementName unreachableDestinationAction
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUnreachableDestinationAction()
    {
        return $this->unreachableDestinationAction;
    }

    /**
     * Setter for unreachableDestinationAction
     *
     * @ElementName unreachableDestinationAction
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null|\CWM\BroadWorksConnector\Ocip\Nil $unreachableDestinationAction
     * @return $this
     */
    public function setUnreachableDestinationAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction $unreachableDestinationAction)
    {
        $this->unreachableDestinationAction = $unreachableDestinationAction;
        return $this;
    }

    /**
     * Getter for unreachableDestinationForwardAddress
     *
     * @ElementName unreachableDestinationForwardAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return $this->unreachableDestinationForwardAddress;
    }

    /**
     * Setter for unreachableDestinationForwardAddress
     *
     * @ElementName unreachableDestinationForwardAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $unreachableDestinationForwardAddress
     * @return $this
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress)
    {
        $this->unreachableDestinationForwardAddress = $unreachableDestinationForwardAddress;
        return $this;
    }

    /**
     * Getter for unreachableDestinationRerouteTrunkGroupKey
     *
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return $this->unreachableDestinationRerouteTrunkGroupKey;
    }

    /**
     * Setter for unreachableDestinationRerouteTrunkGroupKey
     *
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil $unreachableDestinationRerouteTrunkGroupKey
     * @return $this
     */
    public function setUnreachableDestinationRerouteTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey)
    {
        $this->unreachableDestinationRerouteTrunkGroupKey = $unreachableDestinationRerouteTrunkGroupKey;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapInitialCalls
     *
     * @ElementName unreachableDestinationTrapInitialCalls
     * @return int|null
     */
    public function getUnreachableDestinationTrapInitialCalls()
    {
        return $this->unreachableDestinationTrapInitialCalls;
    }

    /**
     * Setter for unreachableDestinationTrapInitialCalls
     *
     * @ElementName unreachableDestinationTrapInitialCalls
     * @param int|null $unreachableDestinationTrapInitialCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls)
    {
        $this->unreachableDestinationTrapInitialCalls = $unreachableDestinationTrapInitialCalls;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapOffsetCalls
     *
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @return int|null
     */
    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return $this->unreachableDestinationTrapOffsetCalls;
    }

    /**
     * Setter for unreachableDestinationTrapOffsetCalls
     *
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @param int|null $unreachableDestinationTrapOffsetCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls)
    {
        $this->unreachableDestinationTrapOffsetCalls = $unreachableDestinationTrapOffsetCalls;
        return $this;
    }

    /**
     * Getter for invitationTimeout
     *
     * @ElementName invitationTimeout
     * @return int|null
     */
    public function getInvitationTimeout()
    {
        return $this->invitationTimeout;
    }

    /**
     * Setter for invitationTimeout
     *
     * @ElementName invitationTimeout
     * @param int|null $invitationTimeout
     * @return $this
     */
    public function setInvitationTimeout($invitationTimeout)
    {
        $this->invitationTimeout = $invitationTimeout;
        return $this;
    }

    /**
     * Getter for requireAuthentication
     *
     * @ElementName requireAuthentication
     * @return bool|null
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication;
    }

    /**
     * Setter for requireAuthentication
     *
     * @ElementName requireAuthentication
     * @param bool|null $requireAuthentication
     * @return $this
     */
    public function setRequireAuthentication($requireAuthentication)
    {
        $this->requireAuthentication = $requireAuthentication;
        return $this;
    }

    /**
     * Getter for sipAuthenticationUserName
     *
     * @ElementName sipAuthenticationUserName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @ElementName sipAuthenticationUserName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        return $this;
    }

    /**
     * Getter for sipAuthenticationPassword
     *
     * @ElementName sipAuthenticationPassword
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSipAuthenticationPassword()
    {
        return $this->sipAuthenticationPassword;
    }

    /**
     * Setter for sipAuthenticationPassword
     *
     * @ElementName sipAuthenticationPassword
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $sipAuthenticationPassword
     * @return $this
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword)
    {
        $this->sipAuthenticationPassword = $sipAuthenticationPassword;
        return $this;
    }

    /**
     * Getter for hostedUserIdList
     *
     * @ElementName hostedUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHostedUserIdList()
    {
        return $this->hostedUserIdList;
    }

    /**
     * Setter for hostedUserIdList
     *
     * @ElementName hostedUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $hostedUserIdList
     * @return $this
     */
    public function setHostedUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $hostedUserIdList)
    {
        $this->hostedUserIdList = $hostedUserIdList;
        return $this;
    }

    /**
     * Getter for trunkGroupIdentity
     *
     * @ElementName trunkGroupIdentity
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTrunkGroupIdentity()
    {
        return $this->trunkGroupIdentity;
    }

    /**
     * Setter for trunkGroupIdentity
     *
     * @ElementName trunkGroupIdentity
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $trunkGroupIdentity
     * @return $this
     */
    public function setTrunkGroupIdentity($trunkGroupIdentity)
    {
        $this->trunkGroupIdentity = $trunkGroupIdentity;
        return $this;
    }

    /**
     * Getter for otgDtgIdentity
     *
     * @ElementName otgDtgIdentity
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getOtgDtgIdentity()
    {
        return $this->otgDtgIdentity;
    }

    /**
     * Setter for otgDtgIdentity
     *
     * @ElementName otgDtgIdentity
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $otgDtgIdentity
     * @return $this
     */
    public function setOtgDtgIdentity($otgDtgIdentity)
    {
        $this->otgDtgIdentity = $otgDtgIdentity;
        return $this;
    }

    /**
     * Getter for includeTrunkGroupIdentity
     *
     * @ElementName includeTrunkGroupIdentity
     * @return bool|null
     */
    public function getIncludeTrunkGroupIdentity()
    {
        return $this->includeTrunkGroupIdentity;
    }

    /**
     * Setter for includeTrunkGroupIdentity
     *
     * @ElementName includeTrunkGroupIdentity
     * @param bool|null $includeTrunkGroupIdentity
     * @return $this
     */
    public function setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity)
    {
        $this->includeTrunkGroupIdentity = $includeTrunkGroupIdentity;
        return $this;
    }

    /**
     * Getter for includeDtgIdentity
     *
     * @ElementName includeDtgIdentity
     * @return bool|null
     */
    public function getIncludeDtgIdentity()
    {
        return $this->includeDtgIdentity;
    }

    /**
     * Setter for includeDtgIdentity
     *
     * @ElementName includeDtgIdentity
     * @param bool|null $includeDtgIdentity
     * @return $this
     */
    public function setIncludeDtgIdentity($includeDtgIdentity)
    {
        $this->includeDtgIdentity = $includeDtgIdentity;
        return $this;
    }

    /**
     * Getter for enableNetworkAddressIdentity
     *
     * @ElementName enableNetworkAddressIdentity
     * @return bool|null
     */
    public function getEnableNetworkAddressIdentity()
    {
        return $this->enableNetworkAddressIdentity;
    }

    /**
     * Setter for enableNetworkAddressIdentity
     *
     * @ElementName enableNetworkAddressIdentity
     * @param bool|null $enableNetworkAddressIdentity
     * @return $this
     */
    public function setEnableNetworkAddressIdentity($enableNetworkAddressIdentity)
    {
        $this->enableNetworkAddressIdentity = $enableNetworkAddressIdentity;
        return $this;
    }

    /**
     * Getter for allowUnscreenedCalls
     *
     * @ElementName allowUnscreenedCalls
     * @return bool|null
     */
    public function getAllowUnscreenedCalls()
    {
        return $this->allowUnscreenedCalls;
    }

    /**
     * Setter for allowUnscreenedCalls
     *
     * @ElementName allowUnscreenedCalls
     * @param bool|null $allowUnscreenedCalls
     * @return $this
     */
    public function setAllowUnscreenedCalls($allowUnscreenedCalls)
    {
        $this->allowUnscreenedCalls = $allowUnscreenedCalls;
        return $this;
    }

    /**
     * Getter for allowUnscreenedEmergencyCalls
     *
     * @ElementName allowUnscreenedEmergencyCalls
     * @return bool|null
     */
    public function getAllowUnscreenedEmergencyCalls()
    {
        return $this->allowUnscreenedEmergencyCalls;
    }

    /**
     * Setter for allowUnscreenedEmergencyCalls
     *
     * @ElementName allowUnscreenedEmergencyCalls
     * @param bool|null $allowUnscreenedEmergencyCalls
     * @return $this
     */
    public function setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls)
    {
        $this->allowUnscreenedEmergencyCalls = $allowUnscreenedEmergencyCalls;
        return $this;
    }

    /**
     * Getter for usePilotUserCallingLineIdentity
     *
     * @ElementName usePilotUserCallingLineIdentity
     * @return bool|null
     */
    public function getUsePilotUserCallingLineIdentity()
    {
        return $this->usePilotUserCallingLineIdentity;
    }

    /**
     * Setter for usePilotUserCallingLineIdentity
     *
     * @ElementName usePilotUserCallingLineIdentity
     * @param bool|null $usePilotUserCallingLineIdentity
     * @return $this
     */
    public function setUsePilotUserCallingLineIdentity($usePilotUserCallingLineIdentity)
    {
        $this->usePilotUserCallingLineIdentity = $usePilotUserCallingLineIdentity;
        return $this;
    }

    /**
     * Getter for usePilotUserChargeNumber
     *
     * @ElementName usePilotUserChargeNumber
     * @return bool|null
     */
    public function getUsePilotUserChargeNumber()
    {
        return $this->usePilotUserChargeNumber;
    }

    /**
     * Setter for usePilotUserChargeNumber
     *
     * @ElementName usePilotUserChargeNumber
     * @param bool|null $usePilotUserChargeNumber
     * @return $this
     */
    public function setUsePilotUserChargeNumber($usePilotUserChargeNumber)
    {
        $this->usePilotUserChargeNumber = $usePilotUserChargeNumber;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysAction
     *
     * @ElementName callForwardingAlwaysAction
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallForwardingAlwaysAction()
    {
        return $this->callForwardingAlwaysAction;
    }

    /**
     * Setter for callForwardingAlwaysAction
     *
     * @ElementName callForwardingAlwaysAction
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction|null|\CWM\BroadWorksConnector\Ocip\Nil $callForwardingAlwaysAction
     * @return $this
     */
    public function setCallForwardingAlwaysAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction $callForwardingAlwaysAction)
    {
        $this->callForwardingAlwaysAction = $callForwardingAlwaysAction;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysForwardAddress
     *
     * @ElementName callForwardingAlwaysForwardAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallForwardingAlwaysForwardAddress()
    {
        return $this->callForwardingAlwaysForwardAddress;
    }

    /**
     * Setter for callForwardingAlwaysForwardAddress
     *
     * @ElementName callForwardingAlwaysForwardAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callForwardingAlwaysForwardAddress
     * @return $this
     */
    public function setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress)
    {
        $this->callForwardingAlwaysForwardAddress = $callForwardingAlwaysForwardAddress;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysRerouteTrunkGroupKey
     *
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return $this->callForwardingAlwaysRerouteTrunkGroupKey;
    }

    /**
     * Setter for callForwardingAlwaysRerouteTrunkGroupKey
     *
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil $callForwardingAlwaysRerouteTrunkGroupKey
     * @return $this
     */
    public function setCallForwardingAlwaysRerouteTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey)
    {
        $this->callForwardingAlwaysRerouteTrunkGroupKey = $callForwardingAlwaysRerouteTrunkGroupKey;
        return $this;
    }


}

