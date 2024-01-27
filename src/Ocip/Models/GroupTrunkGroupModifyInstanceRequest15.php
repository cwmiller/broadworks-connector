<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupModifyInstanceRequest15
 *
 * Modify a Trunk Group Instance in a group.
 *       The access device cannot be modified or cleared if there are any users assigned to the Trunk Group.
 *           The command will fail if enableNetworkAddressIdentity is set and 
 *           administrator is not System/Provisioning level administrator.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by GroupTrunkGroupModifyInstanceRequest19sp1.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupTrunkGroupModifyInstanceRequest19sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16178","type":"sequence"}]
 */
class GroupTrunkGroupModifyInstanceRequest15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    protected $trunkGroupKey = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName pilotUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $pilotUserId = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Nillable
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $department = null;

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $accessDevice = null;

    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 1
     * @var int|null
     */
    protected $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $capacityExceededRerouteTrunkGroupKey = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 0
     * @var int|null
     */
    protected $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 0
     * @var int|null
     */
    protected $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName unreachableDestinationAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $unreachableDestinationAction = null;

    /**
     * @ElementName unreachableDestinationForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $unreachableDestinationForwardAddress = null;

    /**
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $unreachableDestinationRerouteTrunkGroupKey = null;

    /**
     * @ElementName invitationTimeout
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 1
     * @MaxInclusive 255
     * @var int|null
     */
    protected $invitationTimeout = null;

    /**
     * @ElementName requireAuthentication
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $requireAuthentication = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 60
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $sipAuthenticationPassword = null;

    /**
     * @ElementName hostedUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $hostedUserIdList = null;

    /**
     * @ElementName trunkGroupIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $trunkGroupIdentity = null;

    /**
     * @ElementName otgDtgIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $otgDtgIdentity = null;

    /**
     * @ElementName allowTerminationToTrunkGroupIdentity
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $allowTerminationToTrunkGroupIdentity = null;

    /**
     * @ElementName allowTerminationToDtgIdentity
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $allowTerminationToDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentity
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $includeTrunkGroupIdentity = null;

    /**
     * @ElementName includeDtgIdentity
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $includeDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentityForNetworkCalls
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $includeTrunkGroupIdentityForNetworkCalls = null;

    /**
     * @ElementName includeOtgIdentityForNetworkCalls
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $includeOtgIdentityForNetworkCalls = null;

    /**
     * @ElementName enableNetworkAddressIdentity
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $enableNetworkAddressIdentity = null;

    /**
     * @ElementName allowUnscreenedCalls
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $allowUnscreenedCalls = null;

    /**
     * @ElementName allowUnscreenedEmergencyCalls
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $allowUnscreenedEmergencyCalls = null;

    /**
     * @ElementName pilotUserCallingLineIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy|null
     */
    protected $pilotUserCallingLineIdentityPolicy = null;

    /**
     * @ElementName pilotUserChargeNumberPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy|null
     */
    protected $pilotUserChargeNumberPolicy = null;

    /**
     * @ElementName callForwardingAlwaysAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callForwardingAlwaysAction = null;

    /**
     * @ElementName callForwardingAlwaysForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callForwardingAlwaysForwardAddress = null;

    /**
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callForwardingAlwaysRerouteTrunkGroupKey = null;

    /**
     * @ElementName peeringDomain
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $peeringDomain = null;

    /**
     * @ElementName routeToPeeringDomain
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $routeToPeeringDomain = null;

    /**
     * @ElementName prefixEnabled
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $prefixEnabled = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinLength 1
     * @MaxLength 15
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $prefix = null;

    /**
     * @ElementName statefulReroutingEnabled
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $statefulReroutingEnabled = null;

    /**
     * @ElementName sendContinuousOptionsMessage
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $sendContinuousOptionsMessage = null;

    /**
     * @ElementName continuousOptionsSendingIntervalSeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 30
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $continuousOptionsSendingIntervalSeconds = null;

    /**
     * @ElementName failureOptionsSendingIntervalSeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 10
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $failureOptionsSendingIntervalSeconds = null;

    /**
     * @ElementName failureThresholdCounter
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $failureThresholdCounter = null;

    /**
     * @ElementName successThresholdCounter
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $successThresholdCounter = null;

    /**
     * @ElementName inviteFailureThresholdCounter
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $inviteFailureThresholdCounter = null;

    /**
     * @ElementName inviteFailureThresholdWindowSeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @MinInclusive 30
     * @MaxInclusive 240
     * @var int|null
     */
    protected $inviteFailureThresholdWindowSeconds = null;

    /**
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy|null
     */
    protected $pilotUserCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName useSystemCallingLineAssertedIdentityPolicy
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var bool|null
     */
    protected $useSystemCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName pilotUserCallOptimizationPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy|null
     */
    protected $pilotUserCallOptimizationPolicy = null;

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
     * Getter for allowTerminationToTrunkGroupIdentity
     *
     * @return bool
     */
    public function getAllowTerminationToTrunkGroupIdentity()
    {
        return $this->allowTerminationToTrunkGroupIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTerminationToTrunkGroupIdentity;
    }

    /**
     * Setter for allowTerminationToTrunkGroupIdentity
     *
     * @param bool $allowTerminationToTrunkGroupIdentity
     * @return $this
     */
    public function setAllowTerminationToTrunkGroupIdentity($allowTerminationToTrunkGroupIdentity)
    {
        $this->allowTerminationToTrunkGroupIdentity = $allowTerminationToTrunkGroupIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTerminationToTrunkGroupIdentity()
    {
        $this->allowTerminationToTrunkGroupIdentity = null;
        return $this;
    }

    /**
     * Getter for allowTerminationToDtgIdentity
     *
     * @return bool
     */
    public function getAllowTerminationToDtgIdentity()
    {
        return $this->allowTerminationToDtgIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTerminationToDtgIdentity;
    }

    /**
     * Setter for allowTerminationToDtgIdentity
     *
     * @param bool $allowTerminationToDtgIdentity
     * @return $this
     */
    public function setAllowTerminationToDtgIdentity($allowTerminationToDtgIdentity)
    {
        $this->allowTerminationToDtgIdentity = $allowTerminationToDtgIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTerminationToDtgIdentity()
    {
        $this->allowTerminationToDtgIdentity = null;
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
     * Getter for includeTrunkGroupIdentityForNetworkCalls
     *
     * @return bool
     */
    public function getIncludeTrunkGroupIdentityForNetworkCalls()
    {
        return $this->includeTrunkGroupIdentityForNetworkCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeTrunkGroupIdentityForNetworkCalls;
    }

    /**
     * Setter for includeTrunkGroupIdentityForNetworkCalls
     *
     * @param bool $includeTrunkGroupIdentityForNetworkCalls
     * @return $this
     */
    public function setIncludeTrunkGroupIdentityForNetworkCalls($includeTrunkGroupIdentityForNetworkCalls)
    {
        $this->includeTrunkGroupIdentityForNetworkCalls = $includeTrunkGroupIdentityForNetworkCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeTrunkGroupIdentityForNetworkCalls()
    {
        $this->includeTrunkGroupIdentityForNetworkCalls = null;
        return $this;
    }

    /**
     * Getter for includeOtgIdentityForNetworkCalls
     *
     * @return bool
     */
    public function getIncludeOtgIdentityForNetworkCalls()
    {
        return $this->includeOtgIdentityForNetworkCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeOtgIdentityForNetworkCalls;
    }

    /**
     * Setter for includeOtgIdentityForNetworkCalls
     *
     * @param bool $includeOtgIdentityForNetworkCalls
     * @return $this
     */
    public function setIncludeOtgIdentityForNetworkCalls($includeOtgIdentityForNetworkCalls)
    {
        $this->includeOtgIdentityForNetworkCalls = $includeOtgIdentityForNetworkCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeOtgIdentityForNetworkCalls()
    {
        $this->includeOtgIdentityForNetworkCalls = null;
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

    /**
     * Getter for peeringDomain
     *
     * @return string|null
     */
    public function getPeeringDomain()
    {
        return $this->peeringDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->peeringDomain;
    }

    /**
     * Setter for peeringDomain
     *
     * @param string|null $peeringDomain
     * @return $this
     */
    public function setPeeringDomain($peeringDomain = null)
    {
        if ($peeringDomain === null) {
            $this->peeringDomain = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->peeringDomain = $peeringDomain;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeeringDomain()
    {
        $this->peeringDomain = null;
        return $this;
    }

    /**
     * Getter for routeToPeeringDomain
     *
     * @return bool
     */
    public function getRouteToPeeringDomain()
    {
        return $this->routeToPeeringDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeToPeeringDomain;
    }

    /**
     * Setter for routeToPeeringDomain
     *
     * @param bool $routeToPeeringDomain
     * @return $this
     */
    public function setRouteToPeeringDomain($routeToPeeringDomain)
    {
        $this->routeToPeeringDomain = $routeToPeeringDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteToPeeringDomain()
    {
        $this->routeToPeeringDomain = null;
        return $this;
    }

    /**
     * Getter for prefixEnabled
     *
     * @return bool
     */
    public function getPrefixEnabled()
    {
        return $this->prefixEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixEnabled;
    }

    /**
     * Setter for prefixEnabled
     *
     * @param bool $prefixEnabled
     * @return $this
     */
    public function setPrefixEnabled($prefixEnabled)
    {
        $this->prefixEnabled = $prefixEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixEnabled()
    {
        $this->prefixEnabled = null;
        return $this;
    }

    /**
     * Getter for prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param string|null $prefix
     * @return $this
     */
    public function setPrefix($prefix = null)
    {
        if ($prefix === null) {
            $this->prefix = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->prefix = $prefix;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }

    /**
     * Getter for statefulReroutingEnabled
     *
     * @return bool
     */
    public function getStatefulReroutingEnabled()
    {
        return $this->statefulReroutingEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statefulReroutingEnabled;
    }

    /**
     * Setter for statefulReroutingEnabled
     *
     * @param bool $statefulReroutingEnabled
     * @return $this
     */
    public function setStatefulReroutingEnabled($statefulReroutingEnabled)
    {
        $this->statefulReroutingEnabled = $statefulReroutingEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatefulReroutingEnabled()
    {
        $this->statefulReroutingEnabled = null;
        return $this;
    }

    /**
     * Getter for sendContinuousOptionsMessage
     *
     * @return bool
     */
    public function getSendContinuousOptionsMessage()
    {
        return $this->sendContinuousOptionsMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendContinuousOptionsMessage;
    }

    /**
     * Setter for sendContinuousOptionsMessage
     *
     * @param bool $sendContinuousOptionsMessage
     * @return $this
     */
    public function setSendContinuousOptionsMessage($sendContinuousOptionsMessage)
    {
        $this->sendContinuousOptionsMessage = $sendContinuousOptionsMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendContinuousOptionsMessage()
    {
        $this->sendContinuousOptionsMessage = null;
        return $this;
    }

    /**
     * Getter for continuousOptionsSendingIntervalSeconds
     *
     * @return int
     */
    public function getContinuousOptionsSendingIntervalSeconds()
    {
        return $this->continuousOptionsSendingIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->continuousOptionsSendingIntervalSeconds;
    }

    /**
     * Setter for continuousOptionsSendingIntervalSeconds
     *
     * @param int $continuousOptionsSendingIntervalSeconds
     * @return $this
     */
    public function setContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds)
    {
        $this->continuousOptionsSendingIntervalSeconds = $continuousOptionsSendingIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContinuousOptionsSendingIntervalSeconds()
    {
        $this->continuousOptionsSendingIntervalSeconds = null;
        return $this;
    }

    /**
     * Getter for failureOptionsSendingIntervalSeconds
     *
     * @return int
     */
    public function getFailureOptionsSendingIntervalSeconds()
    {
        return $this->failureOptionsSendingIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->failureOptionsSendingIntervalSeconds;
    }

    /**
     * Setter for failureOptionsSendingIntervalSeconds
     *
     * @param int $failureOptionsSendingIntervalSeconds
     * @return $this
     */
    public function setFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds)
    {
        $this->failureOptionsSendingIntervalSeconds = $failureOptionsSendingIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFailureOptionsSendingIntervalSeconds()
    {
        $this->failureOptionsSendingIntervalSeconds = null;
        return $this;
    }

    /**
     * Getter for failureThresholdCounter
     *
     * @return int
     */
    public function getFailureThresholdCounter()
    {
        return $this->failureThresholdCounter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->failureThresholdCounter;
    }

    /**
     * Setter for failureThresholdCounter
     *
     * @param int $failureThresholdCounter
     * @return $this
     */
    public function setFailureThresholdCounter($failureThresholdCounter)
    {
        $this->failureThresholdCounter = $failureThresholdCounter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFailureThresholdCounter()
    {
        $this->failureThresholdCounter = null;
        return $this;
    }

    /**
     * Getter for successThresholdCounter
     *
     * @return int
     */
    public function getSuccessThresholdCounter()
    {
        return $this->successThresholdCounter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->successThresholdCounter;
    }

    /**
     * Setter for successThresholdCounter
     *
     * @param int $successThresholdCounter
     * @return $this
     */
    public function setSuccessThresholdCounter($successThresholdCounter)
    {
        $this->successThresholdCounter = $successThresholdCounter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSuccessThresholdCounter()
    {
        $this->successThresholdCounter = null;
        return $this;
    }

    /**
     * Getter for inviteFailureThresholdCounter
     *
     * @return int
     */
    public function getInviteFailureThresholdCounter()
    {
        return $this->inviteFailureThresholdCounter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->inviteFailureThresholdCounter;
    }

    /**
     * Setter for inviteFailureThresholdCounter
     *
     * @param int $inviteFailureThresholdCounter
     * @return $this
     */
    public function setInviteFailureThresholdCounter($inviteFailureThresholdCounter)
    {
        $this->inviteFailureThresholdCounter = $inviteFailureThresholdCounter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInviteFailureThresholdCounter()
    {
        $this->inviteFailureThresholdCounter = null;
        return $this;
    }

    /**
     * Getter for inviteFailureThresholdWindowSeconds
     *
     * @return int
     */
    public function getInviteFailureThresholdWindowSeconds()
    {
        return $this->inviteFailureThresholdWindowSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->inviteFailureThresholdWindowSeconds;
    }

    /**
     * Setter for inviteFailureThresholdWindowSeconds
     *
     * @param int $inviteFailureThresholdWindowSeconds
     * @return $this
     */
    public function setInviteFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds)
    {
        $this->inviteFailureThresholdWindowSeconds = $inviteFailureThresholdWindowSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInviteFailureThresholdWindowSeconds()
    {
        $this->inviteFailureThresholdWindowSeconds = null;
        return $this;
    }

    /**
     * Getter for pilotUserCallingLineAssertedIdentityPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
     */
    public function getPilotUserCallingLineAssertedIdentityPolicy()
    {
        return $this->pilotUserCallingLineAssertedIdentityPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pilotUserCallingLineAssertedIdentityPolicy;
    }

    /**
     * Setter for pilotUserCallingLineAssertedIdentityPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy $pilotUserCallingLineAssertedIdentityPolicy
     * @return $this
     */
    public function setPilotUserCallingLineAssertedIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy $pilotUserCallingLineAssertedIdentityPolicy)
    {
        $this->pilotUserCallingLineAssertedIdentityPolicy = $pilotUserCallingLineAssertedIdentityPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPilotUserCallingLineAssertedIdentityPolicy()
    {
        $this->pilotUserCallingLineAssertedIdentityPolicy = null;
        return $this;
    }

    /**
     * Getter for useSystemCallingLineAssertedIdentityPolicy
     *
     * @return bool
     */
    public function getUseSystemCallingLineAssertedIdentityPolicy()
    {
        return $this->useSystemCallingLineAssertedIdentityPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemCallingLineAssertedIdentityPolicy;
    }

    /**
     * Setter for useSystemCallingLineAssertedIdentityPolicy
     *
     * @param bool $useSystemCallingLineAssertedIdentityPolicy
     * @return $this
     */
    public function setUseSystemCallingLineAssertedIdentityPolicy($useSystemCallingLineAssertedIdentityPolicy)
    {
        $this->useSystemCallingLineAssertedIdentityPolicy = $useSystemCallingLineAssertedIdentityPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemCallingLineAssertedIdentityPolicy()
    {
        $this->useSystemCallingLineAssertedIdentityPolicy = null;
        return $this;
    }

    /**
     * Getter for pilotUserCallOptimizationPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy
     */
    public function getPilotUserCallOptimizationPolicy()
    {
        return $this->pilotUserCallOptimizationPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pilotUserCallOptimizationPolicy;
    }

    /**
     * Setter for pilotUserCallOptimizationPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy $pilotUserCallOptimizationPolicy
     * @return $this
     */
    public function setPilotUserCallOptimizationPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy $pilotUserCallOptimizationPolicy)
    {
        $this->pilotUserCallOptimizationPolicy = $pilotUserCallOptimizationPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPilotUserCallOptimizationPolicy()
    {
        $this->pilotUserCallOptimizationPolicy = null;
        return $this;
    }
}

