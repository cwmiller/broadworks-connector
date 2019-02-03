<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupModifyInstanceRequest14sp9A
 *
 * Modify a Trunk Group Instance in a group.
 *                 The access device cannot be modified or cleared if there are any users assigned to the Trunk Group.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2968","type":"sequence"}]
 */
class GroupTrunkGroupModifyInstanceRequest14sp9A extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName pilotUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $pilotUserId = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $department = null;

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDevice = null;

    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var bool|null
     */
    private $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededRerouteTrunkGroupKey = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null
     */
    private $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null
     */
    private $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName unreachableDestinationAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationAction = null;

    /**
     * @ElementName unreachableDestinationForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationForwardAddress = null;

    /**
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationRerouteTrunkGroupKey = null;

    /**
     * @ElementName unreachableDestinationTrapInitialCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null
     */
    private $unreachableDestinationTrapInitialCalls = null;

    /**
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null
     */
    private $unreachableDestinationTrapOffsetCalls = null;

    /**
     * @ElementName invitationTimeout
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var int|null
     */
    private $invitationTimeout = null;

    /**
     * @ElementName requireAuthentication
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var bool|null
     */
    private $requireAuthentication = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAuthenticationPassword = null;

    /**
     * @ElementName hostedUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $hostedUserIdList = null;

    /**
     * @ElementName trunkGroupIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $trunkGroupIdentity = null;

    /**
     * @ElementName otgDtgIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $otgDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentity
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var bool|null
     */
    private $includeTrunkGroupIdentity = null;

    /**
     * @ElementName includeDtgIdentity
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var bool|null
     */
    private $includeDtgIdentity = null;

    /**
     * @ElementName enableNetworkAddressIdentity
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var bool|null
     */
    private $enableNetworkAddressIdentity = null;

    /**
     * @ElementName allowUnscreenedCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var bool|null
     */
    private $allowUnscreenedCalls = null;

    /**
     * @ElementName allowUnscreenedEmergencyCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var bool|null
     */
    private $allowUnscreenedEmergencyCalls = null;

    /**
     * @ElementName pilotUserCallingLineIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy|null
     */
    private $pilotUserCallingLineIdentityPolicy = null;

    /**
     * @ElementName pilotUserChargeNumberPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy|null
     */
    private $pilotUserChargeNumberPolicy = null;

    /**
     * @ElementName callForwardingAlwaysAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysAction = null;

    /**
     * @ElementName callForwardingAlwaysForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysForwardAddress = null;

    /**
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2968
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysRerouteTrunkGroupKey = null;

    /**
     * Getter for trunkGroupKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupKey()
    {
        $this->trunkGroupKey = null;
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
     * Getter for pilotUserId
     *
     * @return string|null
     */
    public function getPilotUserId()
    {
        return $this->pilotUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pilotUserId;
    }

    /**
     * Setter for pilotUserId
     *
     * @param string|null $pilotUserId
     * @return $this
     */
    public function setPilotUserId($pilotUserId = null)
    {
        if ($pilotUserId === null) {
            $this->pilotUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->pilotUserId = $pilotUserId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPilotUserId()
    {
        $this->pilotUserId = null;
        return $this;
    }

    /**
     * Getter for department
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getDepartment()
    {
        return $this->department instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->department;
    }

    /**
     * Setter for department
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $department
     * @return $this
     */
    public function setDepartment(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department = null)
    {
        if ($department === null) {
            $this->department = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->department = $department;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartment()
    {
        $this->department = null;
        return $this;
    }

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice = null)
    {
        if ($accessDevice === null) {
            $this->accessDevice = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessDevice = $accessDevice;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
        return $this;
    }

    /**
     * Getter for maxActiveCalls
     *
     * @return int
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param int $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCalls()
    {
        $this->maxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for maxIncomingCalls
     *
     * @return int|null
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxIncomingCalls;
    }

    /**
     * Setter for maxIncomingCalls
     *
     * @param int|null $maxIncomingCalls
     * @return $this
     */
    public function setMaxIncomingCalls($maxIncomingCalls = null)
    {
        if ($maxIncomingCalls === null) {
            $this->maxIncomingCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxIncomingCalls = $maxIncomingCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxIncomingCalls()
    {
        $this->maxIncomingCalls = null;
        return $this;
    }

    /**
     * Getter for maxOutgoingCalls
     *
     * @return int|null
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOutgoingCalls;
    }

    /**
     * Setter for maxOutgoingCalls
     *
     * @param int|null $maxOutgoingCalls
     * @return $this
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls = null)
    {
        if ($maxOutgoingCalls === null) {
            $this->maxOutgoingCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxOutgoingCalls = $maxOutgoingCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxOutgoingCalls()
    {
        $this->maxOutgoingCalls = null;
        return $this;
    }

    /**
     * Getter for enableBursting
     *
     * @return bool
     */
    public function getEnableBursting()
    {
        return $this->enableBursting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableBursting;
    }

    /**
     * Setter for enableBursting
     *
     * @param bool $enableBursting
     * @return $this
     */
    public function setEnableBursting($enableBursting)
    {
        $this->enableBursting = $enableBursting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableBursting()
    {
        $this->enableBursting = null;
        return $this;
    }

    /**
     * Getter for burstingMaxActiveCalls
     *
     * @return int|null
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @param int|null $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls = null)
    {
        if ($burstingMaxActiveCalls === null) {
            $this->burstingMaxActiveCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxActiveCalls()
    {
        $this->burstingMaxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for burstingMaxIncomingCalls
     *
     * @return int|null
     */
    public function getBurstingMaxIncomingCalls()
    {
        return $this->burstingMaxIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxIncomingCalls;
    }

    /**
     * Setter for burstingMaxIncomingCalls
     *
     * @param int|null $burstingMaxIncomingCalls
     * @return $this
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls = null)
    {
        if ($burstingMaxIncomingCalls === null) {
            $this->burstingMaxIncomingCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->burstingMaxIncomingCalls = $burstingMaxIncomingCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxIncomingCalls()
    {
        $this->burstingMaxIncomingCalls = null;
        return $this;
    }

    /**
     * Getter for burstingMaxOutgoingCalls
     *
     * @return int|null
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return $this->burstingMaxOutgoingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxOutgoingCalls;
    }

    /**
     * Setter for burstingMaxOutgoingCalls
     *
     * @param int|null $burstingMaxOutgoingCalls
     * @return $this
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls = null)
    {
        if ($burstingMaxOutgoingCalls === null) {
            $this->burstingMaxOutgoingCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->burstingMaxOutgoingCalls = $burstingMaxOutgoingCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxOutgoingCalls()
    {
        $this->burstingMaxOutgoingCalls = null;
        return $this;
    }

    /**
     * Getter for capacityExceededAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null
     */
    public function getCapacityExceededAction()
    {
        return $this->capacityExceededAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededAction;
    }

    /**
     * Setter for capacityExceededAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null $capacityExceededAction
     * @return $this
     */
    public function setCapacityExceededAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction $capacityExceededAction = null)
    {
        if ($capacityExceededAction === null) {
            $this->capacityExceededAction = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->capacityExceededAction = $capacityExceededAction;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededAction()
    {
        $this->capacityExceededAction = null;
        return $this;
    }

    /**
     * Getter for capacityExceededForwardAddress
     *
     * @return string|null
     */
    public function getCapacityExceededForwardAddress()
    {
        return $this->capacityExceededForwardAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededForwardAddress;
    }

    /**
     * Setter for capacityExceededForwardAddress
     *
     * @param string|null $capacityExceededForwardAddress
     * @return $this
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress = null)
    {
        if ($capacityExceededForwardAddress === null) {
            $this->capacityExceededForwardAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->capacityExceededForwardAddress = $capacityExceededForwardAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededForwardAddress()
    {
        $this->capacityExceededForwardAddress = null;
        return $this;
    }

    /**
     * Getter for capacityExceededRerouteTrunkGroupKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return $this->capacityExceededRerouteTrunkGroupKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededRerouteTrunkGroupKey;
    }

    /**
     * Setter for capacityExceededRerouteTrunkGroupKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $capacityExceededRerouteTrunkGroupKey
     * @return $this
     */
    public function setCapacityExceededRerouteTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $capacityExceededRerouteTrunkGroupKey = null)
    {
        if ($capacityExceededRerouteTrunkGroupKey === null) {
            $this->capacityExceededRerouteTrunkGroupKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->capacityExceededRerouteTrunkGroupKey = $capacityExceededRerouteTrunkGroupKey;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededRerouteTrunkGroupKey()
    {
        $this->capacityExceededRerouteTrunkGroupKey = null;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapInitialCalls
     *
     * @return int
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @param int $capacityExceededTrapInitialCalls
     * @return $this
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $this->capacityExceededTrapInitialCalls = $capacityExceededTrapInitialCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededTrapInitialCalls()
    {
        $this->capacityExceededTrapInitialCalls = null;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapOffsetCalls
     *
     * @return int
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @param int $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededTrapOffsetCalls()
    {
        $this->capacityExceededTrapOffsetCalls = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null
     */
    public function getUnreachableDestinationAction()
    {
        return $this->unreachableDestinationAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationAction;
    }

    /**
     * Setter for unreachableDestinationAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null $unreachableDestinationAction
     * @return $this
     */
    public function setUnreachableDestinationAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction $unreachableDestinationAction = null)
    {
        if ($unreachableDestinationAction === null) {
            $this->unreachableDestinationAction = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->unreachableDestinationAction = $unreachableDestinationAction;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationAction()
    {
        $this->unreachableDestinationAction = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationForwardAddress
     *
     * @return string|null
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return $this->unreachableDestinationForwardAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationForwardAddress;
    }

    /**
     * Setter for unreachableDestinationForwardAddress
     *
     * @param string|null $unreachableDestinationForwardAddress
     * @return $this
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress = null)
    {
        if ($unreachableDestinationForwardAddress === null) {
            $this->unreachableDestinationForwardAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->unreachableDestinationForwardAddress = $unreachableDestinationForwardAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationForwardAddress()
    {
        $this->unreachableDestinationForwardAddress = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationRerouteTrunkGroupKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return $this->unreachableDestinationRerouteTrunkGroupKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationRerouteTrunkGroupKey;
    }

    /**
     * Setter for unreachableDestinationRerouteTrunkGroupKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $unreachableDestinationRerouteTrunkGroupKey
     * @return $this
     */
    public function setUnreachableDestinationRerouteTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey = null)
    {
        if ($unreachableDestinationRerouteTrunkGroupKey === null) {
            $this->unreachableDestinationRerouteTrunkGroupKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->unreachableDestinationRerouteTrunkGroupKey = $unreachableDestinationRerouteTrunkGroupKey;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationRerouteTrunkGroupKey()
    {
        $this->unreachableDestinationRerouteTrunkGroupKey = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapInitialCalls
     *
     * @return int
     */
    public function getUnreachableDestinationTrapInitialCalls()
    {
        return $this->unreachableDestinationTrapInitialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationTrapInitialCalls;
    }

    /**
     * Setter for unreachableDestinationTrapInitialCalls
     *
     * @param int $unreachableDestinationTrapInitialCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls)
    {
        $this->unreachableDestinationTrapInitialCalls = $unreachableDestinationTrapInitialCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationTrapInitialCalls()
    {
        $this->unreachableDestinationTrapInitialCalls = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapOffsetCalls
     *
     * @return int
     */
    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return $this->unreachableDestinationTrapOffsetCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationTrapOffsetCalls;
    }

    /**
     * Setter for unreachableDestinationTrapOffsetCalls
     *
     * @param int $unreachableDestinationTrapOffsetCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls)
    {
        $this->unreachableDestinationTrapOffsetCalls = $unreachableDestinationTrapOffsetCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationTrapOffsetCalls()
    {
        $this->unreachableDestinationTrapOffsetCalls = null;
        return $this;
    }

    /**
     * Getter for invitationTimeout
     *
     * @return int
     */
    public function getInvitationTimeout()
    {
        return $this->invitationTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->invitationTimeout;
    }

    /**
     * Setter for invitationTimeout
     *
     * @param int $invitationTimeout
     * @return $this
     */
    public function setInvitationTimeout($invitationTimeout)
    {
        $this->invitationTimeout = $invitationTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInvitationTimeout()
    {
        $this->invitationTimeout = null;
        return $this;
    }

    /**
     * Getter for requireAuthentication
     *
     * @return bool
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireAuthentication;
    }

    /**
     * Setter for requireAuthentication
     *
     * @param bool $requireAuthentication
     * @return $this
     */
    public function setRequireAuthentication($requireAuthentication)
    {
        $this->requireAuthentication = $requireAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireAuthentication()
    {
        $this->requireAuthentication = null;
        return $this;
    }

    /**
     * Getter for sipAuthenticationUserName
     *
     * @return string|null
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @param string|null $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName = null)
    {
        if ($sipAuthenticationUserName === null) {
            $this->sipAuthenticationUserName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationUserName()
    {
        $this->sipAuthenticationUserName = null;
        return $this;
    }

    /**
     * Getter for sipAuthenticationPassword
     *
     * @return string|null
     */
    public function getSipAuthenticationPassword()
    {
        return $this->sipAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationPassword;
    }

    /**
     * Setter for sipAuthenticationPassword
     *
     * @param string|null $sipAuthenticationPassword
     * @return $this
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword = null)
    {
        if ($sipAuthenticationPassword === null) {
            $this->sipAuthenticationPassword = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipAuthenticationPassword = $sipAuthenticationPassword;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationPassword()
    {
        $this->sipAuthenticationPassword = null;
        return $this;
    }

    /**
     * Getter for hostedUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getHostedUserIdList()
    {
        return $this->hostedUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostedUserIdList;
    }

    /**
     * Setter for hostedUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $hostedUserIdList
     * @return $this
     */
    public function setHostedUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $hostedUserIdList = null)
    {
        if ($hostedUserIdList === null) {
            $this->hostedUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hostedUserIdList = $hostedUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostedUserIdList()
    {
        $this->hostedUserIdList = null;
        return $this;
    }

    /**
     * Getter for trunkGroupIdentity
     *
     * @return string|null
     */
    public function getTrunkGroupIdentity()
    {
        return $this->trunkGroupIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupIdentity;
    }

    /**
     * Setter for trunkGroupIdentity
     *
     * @param string|null $trunkGroupIdentity
     * @return $this
     */
    public function setTrunkGroupIdentity($trunkGroupIdentity = null)
    {
        if ($trunkGroupIdentity === null) {
            $this->trunkGroupIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->trunkGroupIdentity = $trunkGroupIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupIdentity()
    {
        $this->trunkGroupIdentity = null;
        return $this;
    }

    /**
     * Getter for otgDtgIdentity
     *
     * @return string|null
     */
    public function getOtgDtgIdentity()
    {
        return $this->otgDtgIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->otgDtgIdentity;
    }

    /**
     * Setter for otgDtgIdentity
     *
     * @param string|null $otgDtgIdentity
     * @return $this
     */
    public function setOtgDtgIdentity($otgDtgIdentity = null)
    {
        if ($otgDtgIdentity === null) {
            $this->otgDtgIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->otgDtgIdentity = $otgDtgIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOtgDtgIdentity()
    {
        $this->otgDtgIdentity = null;
        return $this;
    }

    /**
     * Getter for includeTrunkGroupIdentity
     *
     * @return bool
     */
    public function getIncludeTrunkGroupIdentity()
    {
        return $this->includeTrunkGroupIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeTrunkGroupIdentity;
    }

    /**
     * Setter for includeTrunkGroupIdentity
     *
     * @param bool $includeTrunkGroupIdentity
     * @return $this
     */
    public function setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity)
    {
        $this->includeTrunkGroupIdentity = $includeTrunkGroupIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeTrunkGroupIdentity()
    {
        $this->includeTrunkGroupIdentity = null;
        return $this;
    }

    /**
     * Getter for includeDtgIdentity
     *
     * @return bool
     */
    public function getIncludeDtgIdentity()
    {
        return $this->includeDtgIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeDtgIdentity;
    }

    /**
     * Setter for includeDtgIdentity
     *
     * @param bool $includeDtgIdentity
     * @return $this
     */
    public function setIncludeDtgIdentity($includeDtgIdentity)
    {
        $this->includeDtgIdentity = $includeDtgIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeDtgIdentity()
    {
        $this->includeDtgIdentity = null;
        return $this;
    }

    /**
     * Getter for enableNetworkAddressIdentity
     *
     * @return bool
     */
    public function getEnableNetworkAddressIdentity()
    {
        return $this->enableNetworkAddressIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNetworkAddressIdentity;
    }

    /**
     * Setter for enableNetworkAddressIdentity
     *
     * @param bool $enableNetworkAddressIdentity
     * @return $this
     */
    public function setEnableNetworkAddressIdentity($enableNetworkAddressIdentity)
    {
        $this->enableNetworkAddressIdentity = $enableNetworkAddressIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNetworkAddressIdentity()
    {
        $this->enableNetworkAddressIdentity = null;
        return $this;
    }

    /**
     * Getter for allowUnscreenedCalls
     *
     * @return bool
     */
    public function getAllowUnscreenedCalls()
    {
        return $this->allowUnscreenedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUnscreenedCalls;
    }

    /**
     * Setter for allowUnscreenedCalls
     *
     * @param bool $allowUnscreenedCalls
     * @return $this
     */
    public function setAllowUnscreenedCalls($allowUnscreenedCalls)
    {
        $this->allowUnscreenedCalls = $allowUnscreenedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUnscreenedCalls()
    {
        $this->allowUnscreenedCalls = null;
        return $this;
    }

    /**
     * Getter for allowUnscreenedEmergencyCalls
     *
     * @return bool
     */
    public function getAllowUnscreenedEmergencyCalls()
    {
        return $this->allowUnscreenedEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUnscreenedEmergencyCalls;
    }

    /**
     * Setter for allowUnscreenedEmergencyCalls
     *
     * @param bool $allowUnscreenedEmergencyCalls
     * @return $this
     */
    public function setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls)
    {
        $this->allowUnscreenedEmergencyCalls = $allowUnscreenedEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUnscreenedEmergencyCalls()
    {
        $this->allowUnscreenedEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for pilotUserCallingLineIdentityPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy
     */
    public function getPilotUserCallingLineIdentityPolicy()
    {
        return $this->pilotUserCallingLineIdentityPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pilotUserCallingLineIdentityPolicy;
    }

    /**
     * Setter for pilotUserCallingLineIdentityPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy $pilotUserCallingLineIdentityPolicy
     * @return $this
     */
    public function setPilotUserCallingLineIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy $pilotUserCallingLineIdentityPolicy)
    {
        $this->pilotUserCallingLineIdentityPolicy = $pilotUserCallingLineIdentityPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPilotUserCallingLineIdentityPolicy()
    {
        $this->pilotUserCallingLineIdentityPolicy = null;
        return $this;
    }

    /**
     * Getter for pilotUserChargeNumberPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy
     */
    public function getPilotUserChargeNumberPolicy()
    {
        return $this->pilotUserChargeNumberPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pilotUserChargeNumberPolicy;
    }

    /**
     * Setter for pilotUserChargeNumberPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy $pilotUserChargeNumberPolicy
     * @return $this
     */
    public function setPilotUserChargeNumberPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy $pilotUserChargeNumberPolicy)
    {
        $this->pilotUserChargeNumberPolicy = $pilotUserChargeNumberPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPilotUserChargeNumberPolicy()
    {
        $this->pilotUserChargeNumberPolicy = null;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction|null
     */
    public function getCallForwardingAlwaysAction()
    {
        return $this->callForwardingAlwaysAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callForwardingAlwaysAction;
    }

    /**
     * Setter for callForwardingAlwaysAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction|null $callForwardingAlwaysAction
     * @return $this
     */
    public function setCallForwardingAlwaysAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction $callForwardingAlwaysAction = null)
    {
        if ($callForwardingAlwaysAction === null) {
            $this->callForwardingAlwaysAction = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callForwardingAlwaysAction = $callForwardingAlwaysAction;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallForwardingAlwaysAction()
    {
        $this->callForwardingAlwaysAction = null;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysForwardAddress
     *
     * @return string|null
     */
    public function getCallForwardingAlwaysForwardAddress()
    {
        return $this->callForwardingAlwaysForwardAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callForwardingAlwaysForwardAddress;
    }

    /**
     * Setter for callForwardingAlwaysForwardAddress
     *
     * @param string|null $callForwardingAlwaysForwardAddress
     * @return $this
     */
    public function setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress = null)
    {
        if ($callForwardingAlwaysForwardAddress === null) {
            $this->callForwardingAlwaysForwardAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callForwardingAlwaysForwardAddress = $callForwardingAlwaysForwardAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallForwardingAlwaysForwardAddress()
    {
        $this->callForwardingAlwaysForwardAddress = null;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysRerouteTrunkGroupKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return $this->callForwardingAlwaysRerouteTrunkGroupKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callForwardingAlwaysRerouteTrunkGroupKey;
    }

    /**
     * Setter for callForwardingAlwaysRerouteTrunkGroupKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $callForwardingAlwaysRerouteTrunkGroupKey
     * @return $this
     */
    public function setCallForwardingAlwaysRerouteTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey = null)
    {
        if ($callForwardingAlwaysRerouteTrunkGroupKey === null) {
            $this->callForwardingAlwaysRerouteTrunkGroupKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callForwardingAlwaysRerouteTrunkGroupKey = $callForwardingAlwaysRerouteTrunkGroupKey;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        $this->callForwardingAlwaysRerouteTrunkGroupKey = null;
        return $this;
    }


}

