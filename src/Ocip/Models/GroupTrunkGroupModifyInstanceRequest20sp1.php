<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupModifyInstanceRequest20sp1
 *
 * Modify a Trunk Group Instance in a group.
 *       The access device cannot be modified or cleared if there are any users assigned to the Trunk Group.
 *       	  The command will fail if enableNetworkAddressIdentity is set and 
 *       	  administrator is not System/Provisioning level administrator.
 *       Following attributes are only used in IMS mode:
 *         implicitRegistrationSetSupportPolicy
 *         useSystemImplicitRegistrationSetSupportPolicy
 *         sipIdentityForPilotAndProxyTrunkModesPolicy    
 *         useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:1236","type":"sequence"}]
 */
class GroupTrunkGroupModifyInstanceRequest20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName pilotUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $pilotUserId = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $department = null;

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDevice = null;

    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededRerouteTrunkGroupKey = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName unreachableDestinationAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationAction = null;

    /**
     * @ElementName unreachableDestinationForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationForwardAddress = null;

    /**
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unreachableDestinationRerouteTrunkGroupKey = null;

    /**
     * @ElementName invitationTimeout
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $invitationTimeout = null;

    /**
     * @ElementName requireAuthentication
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $requireAuthentication = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAuthenticationPassword = null;

    /**
     * @ElementName hostedUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $hostedUserIdList = null;

    /**
     * @ElementName trunkGroupIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $trunkGroupIdentity = null;

    /**
     * @ElementName otgDtgIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $otgDtgIdentity = null;

    /**
     * @ElementName allowTerminationToTrunkGroupIdentity
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $allowTerminationToTrunkGroupIdentity = null;

    /**
     * @ElementName allowTerminationToDtgIdentity
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $allowTerminationToDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentity
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $includeTrunkGroupIdentity = null;

    /**
     * @ElementName includeDtgIdentity
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $includeDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentityForNetworkCalls
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $includeTrunkGroupIdentityForNetworkCalls = null;

    /**
     * @ElementName includeOtgIdentityForNetworkCalls
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $includeOtgIdentityForNetworkCalls = null;

    /**
     * @ElementName enableNetworkAddressIdentity
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $enableNetworkAddressIdentity = null;

    /**
     * @ElementName allowUnscreenedCalls
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $allowUnscreenedCalls = null;

    /**
     * @ElementName allowUnscreenedEmergencyCalls
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $allowUnscreenedEmergencyCalls = null;

    /**
     * @ElementName pilotUserCallingLineIdentityForExternalCallsPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy|null
     */
    private $pilotUserCallingLineIdentityForExternalCallsPolicy = null;

    /**
     * @ElementName pilotUserChargeNumberPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserChargeNumberUsagePolicy|null
     */
    private $pilotUserChargeNumberPolicy = null;

    /**
     * @ElementName callForwardingAlwaysAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCallForwardingAlwaysAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysAction = null;

    /**
     * @ElementName callForwardingAlwaysForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysForwardAddress = null;

    /**
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingAlwaysRerouteTrunkGroupKey = null;

    /**
     * @ElementName peeringDomain
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $peeringDomain = null;

    /**
     * @ElementName routeToPeeringDomain
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $routeToPeeringDomain = null;

    /**
     * @ElementName prefixEnabled
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $prefixEnabled = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Nillable
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $prefix = null;

    /**
     * @ElementName statefulReroutingEnabled
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $statefulReroutingEnabled = null;

    /**
     * @ElementName sendContinuousOptionsMessage
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $sendContinuousOptionsMessage = null;

    /**
     * @ElementName continuousOptionsSendingIntervalSeconds
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $continuousOptionsSendingIntervalSeconds = null;

    /**
     * @ElementName failureOptionsSendingIntervalSeconds
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $failureOptionsSendingIntervalSeconds = null;

    /**
     * @ElementName failureThresholdCounter
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $failureThresholdCounter = null;

    /**
     * @ElementName successThresholdCounter
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $successThresholdCounter = null;

    /**
     * @ElementName inviteFailureThresholdCounter
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $inviteFailureThresholdCounter = null;

    /**
     * @ElementName inviteFailureThresholdWindowSeconds
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var int|null
     */
    private $inviteFailureThresholdWindowSeconds = null;

    /**
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy|null
     */
    private $pilotUserCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName useSystemCallingLineAssertedIdentityPolicy
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $useSystemCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName pilotUserCallOptimizationPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy|null
     */
    private $pilotUserCallOptimizationPolicy = null;

    /**
     * @ElementName clidSourceForScreenedCallsPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy|null
     */
    private $clidSourceForScreenedCallsPolicy = null;

    /**
     * @ElementName useSystemCLIDSourceForScreenedCallsPolicy
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $useSystemCLIDSourceForScreenedCallsPolicy = null;

    /**
     * @ElementName userLookupPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy|null
     */
    private $userLookupPolicy = null;

    /**
     * @ElementName useSystemUserLookupPolicy
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $useSystemUserLookupPolicy = null;

    /**
     * @ElementName pilotUserCallingLineIdentityForEmergencyCallsPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy|null
     */
    private $pilotUserCallingLineIdentityForEmergencyCallsPolicy = null;

    /**
     * @ElementName implicitRegistrationSetSupportPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy|null
     */
    private $implicitRegistrationSetSupportPolicy = null;

    /**
     * @ElementName useSystemImplicitRegistrationSetSupportPolicy
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $useSystemImplicitRegistrationSetSupportPolicy = null;

    /**
     * @ElementName sipIdentityForPilotAndProxyTrunkModesPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy|null
     */
    private $sipIdentityForPilotAndProxyTrunkModesPolicy = null;

    /**
     * @ElementName useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy = null;

    /**
     * @ElementName useSystemSupportConnectedIdentityPolicy
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $useSystemSupportConnectedIdentityPolicy = null;

    /**
     * @ElementName supportConnectedIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy|null
     */
    private $supportConnectedIdentityPolicy = null;

    /**
     * @ElementName useSystemOptionsMessageResponseStatusCodes
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var bool|null
     */
    private $useSystemOptionsMessageResponseStatusCodes = null;

    /**
     * @ElementName deleteOptionsMessageResponseStatusCode
     * @Type string
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1236
     * @var string[]
     */
    private $deleteOptionsMessageResponseStatusCode = array(
        
    );

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
     * Getter for pilotUserCallingLineIdentityForExternalCallsPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy
     */
    public function getPilotUserCallingLineIdentityForExternalCallsPolicy()
    {
        return $this->pilotUserCallingLineIdentityForExternalCallsPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pilotUserCallingLineIdentityForExternalCallsPolicy;
    }

    /**
     * Setter for pilotUserCallingLineIdentityForExternalCallsPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy $pilotUserCallingLineIdentityForExternalCallsPolicy
     * @return $this
     */
    public function setPilotUserCallingLineIdentityForExternalCallsPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy $pilotUserCallingLineIdentityForExternalCallsPolicy)
    {
        $this->pilotUserCallingLineIdentityForExternalCallsPolicy = $pilotUserCallingLineIdentityForExternalCallsPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPilotUserCallingLineIdentityForExternalCallsPolicy()
    {
        $this->pilotUserCallingLineIdentityForExternalCallsPolicy = null;
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

    /**
     * Getter for clidSourceForScreenedCallsPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy
     */
    public function getClidSourceForScreenedCallsPolicy()
    {
        return $this->clidSourceForScreenedCallsPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clidSourceForScreenedCallsPolicy;
    }

    /**
     * Setter for clidSourceForScreenedCallsPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy $clidSourceForScreenedCallsPolicy
     * @return $this
     */
    public function setClidSourceForScreenedCallsPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy $clidSourceForScreenedCallsPolicy)
    {
        $this->clidSourceForScreenedCallsPolicy = $clidSourceForScreenedCallsPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClidSourceForScreenedCallsPolicy()
    {
        $this->clidSourceForScreenedCallsPolicy = null;
        return $this;
    }

    /**
     * Getter for useSystemCLIDSourceForScreenedCallsPolicy
     *
     * @return bool
     */
    public function getUseSystemCLIDSourceForScreenedCallsPolicy()
    {
        return $this->useSystemCLIDSourceForScreenedCallsPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemCLIDSourceForScreenedCallsPolicy;
    }

    /**
     * Setter for useSystemCLIDSourceForScreenedCallsPolicy
     *
     * @param bool $useSystemCLIDSourceForScreenedCallsPolicy
     * @return $this
     */
    public function setUseSystemCLIDSourceForScreenedCallsPolicy($useSystemCLIDSourceForScreenedCallsPolicy)
    {
        $this->useSystemCLIDSourceForScreenedCallsPolicy = $useSystemCLIDSourceForScreenedCallsPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemCLIDSourceForScreenedCallsPolicy()
    {
        $this->useSystemCLIDSourceForScreenedCallsPolicy = null;
        return $this;
    }

    /**
     * Getter for userLookupPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy
     */
    public function getUserLookupPolicy()
    {
        return $this->userLookupPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userLookupPolicy;
    }

    /**
     * Setter for userLookupPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy $userLookupPolicy
     * @return $this
     */
    public function setUserLookupPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy $userLookupPolicy)
    {
        $this->userLookupPolicy = $userLookupPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserLookupPolicy()
    {
        $this->userLookupPolicy = null;
        return $this;
    }

    /**
     * Getter for useSystemUserLookupPolicy
     *
     * @return bool
     */
    public function getUseSystemUserLookupPolicy()
    {
        return $this->useSystemUserLookupPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemUserLookupPolicy;
    }

    /**
     * Setter for useSystemUserLookupPolicy
     *
     * @param bool $useSystemUserLookupPolicy
     * @return $this
     */
    public function setUseSystemUserLookupPolicy($useSystemUserLookupPolicy)
    {
        $this->useSystemUserLookupPolicy = $useSystemUserLookupPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemUserLookupPolicy()
    {
        $this->useSystemUserLookupPolicy = null;
        return $this;
    }

    /**
     * Getter for pilotUserCallingLineIdentityForEmergencyCallsPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy
     */
    public function getPilotUserCallingLineIdentityForEmergencyCallsPolicy()
    {
        return $this->pilotUserCallingLineIdentityForEmergencyCallsPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pilotUserCallingLineIdentityForEmergencyCallsPolicy;
    }

    /**
     * Setter for pilotUserCallingLineIdentityForEmergencyCallsPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy $pilotUserCallingLineIdentityForEmergencyCallsPolicy
     * @return $this
     */
    public function setPilotUserCallingLineIdentityForEmergencyCallsPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineIdentityUsagePolicy $pilotUserCallingLineIdentityForEmergencyCallsPolicy)
    {
        $this->pilotUserCallingLineIdentityForEmergencyCallsPolicy = $pilotUserCallingLineIdentityForEmergencyCallsPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPilotUserCallingLineIdentityForEmergencyCallsPolicy()
    {
        $this->pilotUserCallingLineIdentityForEmergencyCallsPolicy = null;
        return $this;
    }

    /**
     * Getter for implicitRegistrationSetSupportPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy
     */
    public function getImplicitRegistrationSetSupportPolicy()
    {
        return $this->implicitRegistrationSetSupportPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->implicitRegistrationSetSupportPolicy;
    }

    /**
     * Setter for implicitRegistrationSetSupportPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy $implicitRegistrationSetSupportPolicy
     * @return $this
     */
    public function setImplicitRegistrationSetSupportPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy $implicitRegistrationSetSupportPolicy)
    {
        $this->implicitRegistrationSetSupportPolicy = $implicitRegistrationSetSupportPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImplicitRegistrationSetSupportPolicy()
    {
        $this->implicitRegistrationSetSupportPolicy = null;
        return $this;
    }

    /**
     * Getter for useSystemImplicitRegistrationSetSupportPolicy
     *
     * @return bool
     */
    public function getUseSystemImplicitRegistrationSetSupportPolicy()
    {
        return $this->useSystemImplicitRegistrationSetSupportPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemImplicitRegistrationSetSupportPolicy;
    }

    /**
     * Setter for useSystemImplicitRegistrationSetSupportPolicy
     *
     * @param bool $useSystemImplicitRegistrationSetSupportPolicy
     * @return $this
     */
    public function setUseSystemImplicitRegistrationSetSupportPolicy($useSystemImplicitRegistrationSetSupportPolicy)
    {
        $this->useSystemImplicitRegistrationSetSupportPolicy = $useSystemImplicitRegistrationSetSupportPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemImplicitRegistrationSetSupportPolicy()
    {
        $this->useSystemImplicitRegistrationSetSupportPolicy = null;
        return $this;
    }

    /**
     * Getter for sipIdentityForPilotAndProxyTrunkModesPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy
     */
    public function getSipIdentityForPilotAndProxyTrunkModesPolicy()
    {
        return $this->sipIdentityForPilotAndProxyTrunkModesPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipIdentityForPilotAndProxyTrunkModesPolicy;
    }

    /**
     * Setter for sipIdentityForPilotAndProxyTrunkModesPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy $sipIdentityForPilotAndProxyTrunkModesPolicy
     * @return $this
     */
    public function setSipIdentityForPilotAndProxyTrunkModesPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy $sipIdentityForPilotAndProxyTrunkModesPolicy)
    {
        $this->sipIdentityForPilotAndProxyTrunkModesPolicy = $sipIdentityForPilotAndProxyTrunkModesPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipIdentityForPilotAndProxyTrunkModesPolicy()
    {
        $this->sipIdentityForPilotAndProxyTrunkModesPolicy = null;
        return $this;
    }

    /**
     * Getter for useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy
     *
     * @return bool
     */
    public function getUseSystemSIPIdentityForPilotAndProxyTrunkModesPolicy()
    {
        return $this->useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy;
    }

    /**
     * Setter for useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy
     *
     * @param bool $useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy
     * @return $this
     */
    public function setUseSystemSIPIdentityForPilotAndProxyTrunkModesPolicy($useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy)
    {
        $this->useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy = $useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemSIPIdentityForPilotAndProxyTrunkModesPolicy()
    {
        $this->useSystemSIPIdentityForPilotAndProxyTrunkModesPolicy = null;
        return $this;
    }

    /**
     * Getter for useSystemSupportConnectedIdentityPolicy
     *
     * @return bool
     */
    public function getUseSystemSupportConnectedIdentityPolicy()
    {
        return $this->useSystemSupportConnectedIdentityPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemSupportConnectedIdentityPolicy;
    }

    /**
     * Setter for useSystemSupportConnectedIdentityPolicy
     *
     * @param bool $useSystemSupportConnectedIdentityPolicy
     * @return $this
     */
    public function setUseSystemSupportConnectedIdentityPolicy($useSystemSupportConnectedIdentityPolicy)
    {
        $this->useSystemSupportConnectedIdentityPolicy = $useSystemSupportConnectedIdentityPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemSupportConnectedIdentityPolicy()
    {
        $this->useSystemSupportConnectedIdentityPolicy = null;
        return $this;
    }

    /**
     * Getter for supportConnectedIdentityPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy
     */
    public function getSupportConnectedIdentityPolicy()
    {
        return $this->supportConnectedIdentityPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportConnectedIdentityPolicy;
    }

    /**
     * Setter for supportConnectedIdentityPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy $supportConnectedIdentityPolicy
     * @return $this
     */
    public function setSupportConnectedIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy $supportConnectedIdentityPolicy)
    {
        $this->supportConnectedIdentityPolicy = $supportConnectedIdentityPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportConnectedIdentityPolicy()
    {
        $this->supportConnectedIdentityPolicy = null;
        return $this;
    }

    /**
     * Getter for useSystemOptionsMessageResponseStatusCodes
     *
     * @return bool
     */
    public function getUseSystemOptionsMessageResponseStatusCodes()
    {
        return $this->useSystemOptionsMessageResponseStatusCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemOptionsMessageResponseStatusCodes;
    }

    /**
     * Setter for useSystemOptionsMessageResponseStatusCodes
     *
     * @param bool $useSystemOptionsMessageResponseStatusCodes
     * @return $this
     */
    public function setUseSystemOptionsMessageResponseStatusCodes($useSystemOptionsMessageResponseStatusCodes)
    {
        $this->useSystemOptionsMessageResponseStatusCodes = $useSystemOptionsMessageResponseStatusCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemOptionsMessageResponseStatusCodes()
    {
        $this->useSystemOptionsMessageResponseStatusCodes = null;
        return $this;
    }

    /**
     * Getter for deleteOptionsMessageResponseStatusCode
     *
     * @return string[]
     */
    public function getDeleteOptionsMessageResponseStatusCode()
    {
        return $this->deleteOptionsMessageResponseStatusCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteOptionsMessageResponseStatusCode;
    }

    /**
     * Setter for deleteOptionsMessageResponseStatusCode
     *
     * @param string[] $deleteOptionsMessageResponseStatusCode
     * @return $this
     */
    public function setDeleteOptionsMessageResponseStatusCode(array $deleteOptionsMessageResponseStatusCode)
    {
        $this->deleteOptionsMessageResponseStatusCode = $deleteOptionsMessageResponseStatusCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteOptionsMessageResponseStatusCode()
    {
        $this->deleteOptionsMessageResponseStatusCode = null;
        return $this;
    }

    /**
     * Adder for deleteOptionsMessageResponseStatusCode
     *
     * @param string $deleteOptionsMessageResponseStatusCode
     * @return $this
     */
    public function addDeleteOptionsMessageResponseStatusCode(string $deleteOptionsMessageResponseStatusCode)
    {
        $this->deleteOptionsMessageResponseStatusCode[] = $deleteOptionsMessageResponseStatusCode;
        return $this;
    }


}

