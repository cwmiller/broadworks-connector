<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceResponse19sp1
 *
 * Response to GroupTrunkGroupGetInstanceRequest19sp1.
 *         Returns the profile information for the Trunk Group.
 *         Contains a hosted user table with column headings: "User Id", "Last
 * Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone
 * Number", 
 *         "Extension", "Department", "Email Address".
 * 		
 * 		Replaced by GroupTrunkGroupGetInstanceResponse19sp1V2.
 */
class GroupTrunkGroupGetInstanceResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName pilotUserId
     * @var string|null
     */
    private $pilotUserId = null;

    /**
     * @ElementName department
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $department = null;

    /**
     * @ElementName accessDevice
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    private $accessDevice = null;

    /**
     * @ElementName maxActiveCalls
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @var int|null
     */
    private $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @var int|null
     */
    private $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @var bool|null
     */
    private $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @var int|null
     */
    private $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @var int|null
     */
    private $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @var int|null
     */
    private $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @var string|null
     */
    private $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @var string|null
     */
    private $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
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
     * @var string|null
     */
    private $unreachableDestinationAction = null;

    /**
     * @ElementName unreachableDestinationForwardAddress
     * @var string|null
     */
    private $unreachableDestinationForwardAddress = null;

    /**
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $unreachableDestinationRerouteTrunkGroupKey = null;

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
     * @var string|null
     */
    private $sipAuthenticationUserName = null;

    /**
     * @ElementName hostedUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $hostedUserTable = null;

    /**
     * @ElementName trunkGroupIdentity
     * @var string|null
     */
    private $trunkGroupIdentity = null;

    /**
     * @ElementName otgDtgIdentity
     * @var string|null
     */
    private $otgDtgIdentity = null;

    /**
     * @ElementName allowTerminationToTrunkGroupIdentity
     * @var bool|null
     */
    private $allowTerminationToTrunkGroupIdentity = null;

    /**
     * @ElementName allowTerminationToDtgIdentity
     * @var bool|null
     */
    private $allowTerminationToDtgIdentity = null;

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
     * @ElementName includeTrunkGroupIdentityForNetworkCalls
     * @var bool|null
     */
    private $includeTrunkGroupIdentityForNetworkCalls = null;

    /**
     * @ElementName includeOtgIdentityForNetworkCalls
     * @var bool|null
     */
    private $includeOtgIdentityForNetworkCalls = null;

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
     * @ElementName pilotUserCallingLineIdentityForExternalCallsPolicy
     * @var string|null
     */
    private $pilotUserCallingLineIdentityForExternalCallsPolicy = null;

    /**
     * @ElementName pilotUserChargeNumberPolicy
     * @var string|null
     */
    private $pilotUserChargeNumberPolicy = null;

    /**
     * @ElementName callForwardingAlwaysAction
     * @var string|null
     */
    private $callForwardingAlwaysAction = null;

    /**
     * @ElementName callForwardingAlwaysForwardAddress
     * @var string|null
     */
    private $callForwardingAlwaysForwardAddress = null;

    /**
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $callForwardingAlwaysRerouteTrunkGroupKey = null;

    /**
     * @ElementName peeringDomain
     * @var string|null
     */
    private $peeringDomain = null;

    /**
     * @ElementName routeToPeeringDomain
     * @var bool|null
     */
    private $routeToPeeringDomain = null;

    /**
     * @ElementName prefixEnabled
     * @var bool|null
     */
    private $prefixEnabled = null;

    /**
     * @ElementName prefix
     * @var string|null
     */
    private $prefix = null;

    /**
     * @ElementName statefulReroutingEnabled
     * @var bool|null
     */
    private $statefulReroutingEnabled = null;

    /**
     * @ElementName sendContinuousOptionsMessage
     * @var bool|null
     */
    private $sendContinuousOptionsMessage = null;

    /**
     * @ElementName continuousOptionsSendingIntervalSeconds
     * @var int|null
     */
    private $continuousOptionsSendingIntervalSeconds = null;

    /**
     * @ElementName failureOptionsSendingIntervalSeconds
     * @var int|null
     */
    private $failureOptionsSendingIntervalSeconds = null;

    /**
     * @ElementName failureThresholdCounter
     * @var int|null
     */
    private $failureThresholdCounter = null;

    /**
     * @ElementName successThresholdCounter
     * @var int|null
     */
    private $successThresholdCounter = null;

    /**
     * @ElementName inviteFailureThresholdCounter
     * @var int|null
     */
    private $inviteFailureThresholdCounter = null;

    /**
     * @ElementName inviteFailureThresholdWindowSeconds
     * @var int|null
     */
    private $inviteFailureThresholdWindowSeconds = null;

    /**
     * @ElementName trunkGroupState
     * @var string|null
     */
    private $trunkGroupState = null;

    /**
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @var string|null
     */
    private $pilotUserCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName useSystemCallingLineAssertedIdentityPolicy
     * @var bool|null
     */
    private $useSystemCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName totalActiveIncomingCalls
     * @var int|null
     */
    private $totalActiveIncomingCalls = null;

    /**
     * @ElementName totalActiveOutgoingCalls
     * @var int|null
     */
    private $totalActiveOutgoingCalls = null;

    /**
     * @ElementName pilotUserCallOptimizationPolicy
     * @var string|null
     */
    private $pilotUserCallOptimizationPolicy = null;

    /**
     * @ElementName clidSourceForScreenedCallsPolicy
     * @var string|null
     */
    private $clidSourceForScreenedCallsPolicy = null;

    /**
     * @ElementName useSystemCLIDSourceForScreenedCallsPolicy
     * @var bool|null
     */
    private $useSystemCLIDSourceForScreenedCallsPolicy = null;

    /**
     * @ElementName userLookupPolicy
     * @var string|null
     */
    private $userLookupPolicy = null;

    /**
     * @ElementName useSystemUserLookupPolicy
     * @var bool|null
     */
    private $useSystemUserLookupPolicy = null;

    /**
     * @ElementName pilotUserCallingLineIdentityForEmergencyCallsPolicy
     * @var string|null
     */
    private $pilotUserCallingLineIdentityForEmergencyCallsPolicy = null;

    /**
     * Getter for pilotUserId
     *
     * @ElementName pilotUserId
     * @return string|null
     */
    public function getPilotUserId()
    {
        return $this->pilotUserId;
    }

    /**
     * Setter for pilotUserId
     *
     * @ElementName pilotUserId
     * @param string|null $pilotUserId
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Setter for department
     *
     * @ElementName department
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Getter for accessDevice
     *
     * @ElementName accessDevice
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @ElementName accessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null $accessDevice
     * @return $this
     */
    public function setAccessDevice($accessDevice)
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
     * @return int|null
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls;
    }

    /**
     * Setter for maxIncomingCalls
     *
     * @ElementName maxIncomingCalls
     * @param int|null $maxIncomingCalls
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
     * @return int|null
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls;
    }

    /**
     * Setter for maxOutgoingCalls
     *
     * @ElementName maxOutgoingCalls
     * @param int|null $maxOutgoingCalls
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
     * @return int|null
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @param int|null $burstingMaxActiveCalls
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
     * @return int|null
     */
    public function getBurstingMaxIncomingCalls()
    {
        return $this->burstingMaxIncomingCalls;
    }

    /**
     * Setter for burstingMaxIncomingCalls
     *
     * @ElementName burstingMaxIncomingCalls
     * @param int|null $burstingMaxIncomingCalls
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
     * @return int|null
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return $this->burstingMaxOutgoingCalls;
    }

    /**
     * Setter for burstingMaxOutgoingCalls
     *
     * @ElementName burstingMaxOutgoingCalls
     * @param int|null $burstingMaxOutgoingCalls
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
     * @return string|null
     */
    public function getCapacityExceededAction()
    {
        return $this->capacityExceededAction;
    }

    /**
     * Setter for capacityExceededAction
     *
     * @ElementName capacityExceededAction
     * @param string|null $capacityExceededAction
     * @return $this
     */
    public function setCapacityExceededAction($capacityExceededAction)
    {
        $this->capacityExceededAction = $capacityExceededAction;
        return $this;
    }

    /**
     * Getter for capacityExceededForwardAddress
     *
     * @ElementName capacityExceededForwardAddress
     * @return string|null
     */
    public function getCapacityExceededForwardAddress()
    {
        return $this->capacityExceededForwardAddress;
    }

    /**
     * Setter for capacityExceededForwardAddress
     *
     * @ElementName capacityExceededForwardAddress
     * @param string|null $capacityExceededForwardAddress
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return $this->capacityExceededRerouteTrunkGroupKey;
    }

    /**
     * Setter for capacityExceededRerouteTrunkGroupKey
     *
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $capacityExceededRerouteTrunkGroupKey
     * @return $this
     */
    public function setCapacityExceededRerouteTrunkGroupKey($capacityExceededRerouteTrunkGroupKey)
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
     * @return string|null
     */
    public function getUnreachableDestinationAction()
    {
        return $this->unreachableDestinationAction;
    }

    /**
     * Setter for unreachableDestinationAction
     *
     * @ElementName unreachableDestinationAction
     * @param string|null $unreachableDestinationAction
     * @return $this
     */
    public function setUnreachableDestinationAction($unreachableDestinationAction)
    {
        $this->unreachableDestinationAction = $unreachableDestinationAction;
        return $this;
    }

    /**
     * Getter for unreachableDestinationForwardAddress
     *
     * @ElementName unreachableDestinationForwardAddress
     * @return string|null
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return $this->unreachableDestinationForwardAddress;
    }

    /**
     * Setter for unreachableDestinationForwardAddress
     *
     * @ElementName unreachableDestinationForwardAddress
     * @param string|null $unreachableDestinationForwardAddress
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return $this->unreachableDestinationRerouteTrunkGroupKey;
    }

    /**
     * Setter for unreachableDestinationRerouteTrunkGroupKey
     *
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $unreachableDestinationRerouteTrunkGroupKey
     * @return $this
     */
    public function setUnreachableDestinationRerouteTrunkGroupKey($unreachableDestinationRerouteTrunkGroupKey)
    {
        $this->unreachableDestinationRerouteTrunkGroupKey = $unreachableDestinationRerouteTrunkGroupKey;
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
     * @return string|null
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @ElementName sipAuthenticationUserName
     * @param string|null $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        return $this;
    }

    /**
     * Getter for hostedUserTable
     *
     * @ElementName hostedUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getHostedUserTable()
    {
        return $this->hostedUserTable;
    }

    /**
     * Setter for hostedUserTable
     *
     * @ElementName hostedUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $hostedUserTable
     * @return $this
     */
    public function setHostedUserTable($hostedUserTable)
    {
        $this->hostedUserTable = $hostedUserTable;
        return $this;
    }

    /**
     * Getter for trunkGroupIdentity
     *
     * @ElementName trunkGroupIdentity
     * @return string|null
     */
    public function getTrunkGroupIdentity()
    {
        return $this->trunkGroupIdentity;
    }

    /**
     * Setter for trunkGroupIdentity
     *
     * @ElementName trunkGroupIdentity
     * @param string|null $trunkGroupIdentity
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
     * @return string|null
     */
    public function getOtgDtgIdentity()
    {
        return $this->otgDtgIdentity;
    }

    /**
     * Setter for otgDtgIdentity
     *
     * @ElementName otgDtgIdentity
     * @param string|null $otgDtgIdentity
     * @return $this
     */
    public function setOtgDtgIdentity($otgDtgIdentity)
    {
        $this->otgDtgIdentity = $otgDtgIdentity;
        return $this;
    }

    /**
     * Getter for allowTerminationToTrunkGroupIdentity
     *
     * @ElementName allowTerminationToTrunkGroupIdentity
     * @return bool|null
     */
    public function getAllowTerminationToTrunkGroupIdentity()
    {
        return $this->allowTerminationToTrunkGroupIdentity;
    }

    /**
     * Setter for allowTerminationToTrunkGroupIdentity
     *
     * @ElementName allowTerminationToTrunkGroupIdentity
     * @param bool|null $allowTerminationToTrunkGroupIdentity
     * @return $this
     */
    public function setAllowTerminationToTrunkGroupIdentity($allowTerminationToTrunkGroupIdentity)
    {
        $this->allowTerminationToTrunkGroupIdentity = $allowTerminationToTrunkGroupIdentity;
        return $this;
    }

    /**
     * Getter for allowTerminationToDtgIdentity
     *
     * @ElementName allowTerminationToDtgIdentity
     * @return bool|null
     */
    public function getAllowTerminationToDtgIdentity()
    {
        return $this->allowTerminationToDtgIdentity;
    }

    /**
     * Setter for allowTerminationToDtgIdentity
     *
     * @ElementName allowTerminationToDtgIdentity
     * @param bool|null $allowTerminationToDtgIdentity
     * @return $this
     */
    public function setAllowTerminationToDtgIdentity($allowTerminationToDtgIdentity)
    {
        $this->allowTerminationToDtgIdentity = $allowTerminationToDtgIdentity;
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
     * Getter for includeTrunkGroupIdentityForNetworkCalls
     *
     * @ElementName includeTrunkGroupIdentityForNetworkCalls
     * @return bool|null
     */
    public function getIncludeTrunkGroupIdentityForNetworkCalls()
    {
        return $this->includeTrunkGroupIdentityForNetworkCalls;
    }

    /**
     * Setter for includeTrunkGroupIdentityForNetworkCalls
     *
     * @ElementName includeTrunkGroupIdentityForNetworkCalls
     * @param bool|null $includeTrunkGroupIdentityForNetworkCalls
     * @return $this
     */
    public function setIncludeTrunkGroupIdentityForNetworkCalls($includeTrunkGroupIdentityForNetworkCalls)
    {
        $this->includeTrunkGroupIdentityForNetworkCalls = $includeTrunkGroupIdentityForNetworkCalls;
        return $this;
    }

    /**
     * Getter for includeOtgIdentityForNetworkCalls
     *
     * @ElementName includeOtgIdentityForNetworkCalls
     * @return bool|null
     */
    public function getIncludeOtgIdentityForNetworkCalls()
    {
        return $this->includeOtgIdentityForNetworkCalls;
    }

    /**
     * Setter for includeOtgIdentityForNetworkCalls
     *
     * @ElementName includeOtgIdentityForNetworkCalls
     * @param bool|null $includeOtgIdentityForNetworkCalls
     * @return $this
     */
    public function setIncludeOtgIdentityForNetworkCalls($includeOtgIdentityForNetworkCalls)
    {
        $this->includeOtgIdentityForNetworkCalls = $includeOtgIdentityForNetworkCalls;
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
     * Getter for pilotUserCallingLineIdentityForExternalCallsPolicy
     *
     * @ElementName pilotUserCallingLineIdentityForExternalCallsPolicy
     * @return string|null
     */
    public function getPilotUserCallingLineIdentityForExternalCallsPolicy()
    {
        return $this->pilotUserCallingLineIdentityForExternalCallsPolicy;
    }

    /**
     * Setter for pilotUserCallingLineIdentityForExternalCallsPolicy
     *
     * @ElementName pilotUserCallingLineIdentityForExternalCallsPolicy
     * @param string|null $pilotUserCallingLineIdentityForExternalCallsPolicy
     * @return $this
     */
    public function setPilotUserCallingLineIdentityForExternalCallsPolicy($pilotUserCallingLineIdentityForExternalCallsPolicy)
    {
        $this->pilotUserCallingLineIdentityForExternalCallsPolicy = $pilotUserCallingLineIdentityForExternalCallsPolicy;
        return $this;
    }

    /**
     * Getter for pilotUserChargeNumberPolicy
     *
     * @ElementName pilotUserChargeNumberPolicy
     * @return string|null
     */
    public function getPilotUserChargeNumberPolicy()
    {
        return $this->pilotUserChargeNumberPolicy;
    }

    /**
     * Setter for pilotUserChargeNumberPolicy
     *
     * @ElementName pilotUserChargeNumberPolicy
     * @param string|null $pilotUserChargeNumberPolicy
     * @return $this
     */
    public function setPilotUserChargeNumberPolicy($pilotUserChargeNumberPolicy)
    {
        $this->pilotUserChargeNumberPolicy = $pilotUserChargeNumberPolicy;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysAction
     *
     * @ElementName callForwardingAlwaysAction
     * @return string|null
     */
    public function getCallForwardingAlwaysAction()
    {
        return $this->callForwardingAlwaysAction;
    }

    /**
     * Setter for callForwardingAlwaysAction
     *
     * @ElementName callForwardingAlwaysAction
     * @param string|null $callForwardingAlwaysAction
     * @return $this
     */
    public function setCallForwardingAlwaysAction($callForwardingAlwaysAction)
    {
        $this->callForwardingAlwaysAction = $callForwardingAlwaysAction;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysForwardAddress
     *
     * @ElementName callForwardingAlwaysForwardAddress
     * @return string|null
     */
    public function getCallForwardingAlwaysForwardAddress()
    {
        return $this->callForwardingAlwaysForwardAddress;
    }

    /**
     * Setter for callForwardingAlwaysForwardAddress
     *
     * @ElementName callForwardingAlwaysForwardAddress
     * @param string|null $callForwardingAlwaysForwardAddress
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return $this->callForwardingAlwaysRerouteTrunkGroupKey;
    }

    /**
     * Setter for callForwardingAlwaysRerouteTrunkGroupKey
     *
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $callForwardingAlwaysRerouteTrunkGroupKey
     * @return $this
     */
    public function setCallForwardingAlwaysRerouteTrunkGroupKey($callForwardingAlwaysRerouteTrunkGroupKey)
    {
        $this->callForwardingAlwaysRerouteTrunkGroupKey = $callForwardingAlwaysRerouteTrunkGroupKey;
        return $this;
    }

    /**
     * Getter for peeringDomain
     *
     * @ElementName peeringDomain
     * @return string|null
     */
    public function getPeeringDomain()
    {
        return $this->peeringDomain;
    }

    /**
     * Setter for peeringDomain
     *
     * @ElementName peeringDomain
     * @param string|null $peeringDomain
     * @return $this
     */
    public function setPeeringDomain($peeringDomain)
    {
        $this->peeringDomain = $peeringDomain;
        return $this;
    }

    /**
     * Getter for routeToPeeringDomain
     *
     * @ElementName routeToPeeringDomain
     * @return bool|null
     */
    public function getRouteToPeeringDomain()
    {
        return $this->routeToPeeringDomain;
    }

    /**
     * Setter for routeToPeeringDomain
     *
     * @ElementName routeToPeeringDomain
     * @param bool|null $routeToPeeringDomain
     * @return $this
     */
    public function setRouteToPeeringDomain($routeToPeeringDomain)
    {
        $this->routeToPeeringDomain = $routeToPeeringDomain;
        return $this;
    }

    /**
     * Getter for prefixEnabled
     *
     * @ElementName prefixEnabled
     * @return bool|null
     */
    public function getPrefixEnabled()
    {
        return $this->prefixEnabled;
    }

    /**
     * Setter for prefixEnabled
     *
     * @ElementName prefixEnabled
     * @param bool|null $prefixEnabled
     * @return $this
     */
    public function setPrefixEnabled($prefixEnabled)
    {
        $this->prefixEnabled = $prefixEnabled;
        return $this;
    }

    /**
     * Getter for prefix
     *
     * @ElementName prefix
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @ElementName prefix
     * @param string|null $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Getter for statefulReroutingEnabled
     *
     * @ElementName statefulReroutingEnabled
     * @return bool|null
     */
    public function getStatefulReroutingEnabled()
    {
        return $this->statefulReroutingEnabled;
    }

    /**
     * Setter for statefulReroutingEnabled
     *
     * @ElementName statefulReroutingEnabled
     * @param bool|null $statefulReroutingEnabled
     * @return $this
     */
    public function setStatefulReroutingEnabled($statefulReroutingEnabled)
    {
        $this->statefulReroutingEnabled = $statefulReroutingEnabled;
        return $this;
    }

    /**
     * Getter for sendContinuousOptionsMessage
     *
     * @ElementName sendContinuousOptionsMessage
     * @return bool|null
     */
    public function getSendContinuousOptionsMessage()
    {
        return $this->sendContinuousOptionsMessage;
    }

    /**
     * Setter for sendContinuousOptionsMessage
     *
     * @ElementName sendContinuousOptionsMessage
     * @param bool|null $sendContinuousOptionsMessage
     * @return $this
     */
    public function setSendContinuousOptionsMessage($sendContinuousOptionsMessage)
    {
        $this->sendContinuousOptionsMessage = $sendContinuousOptionsMessage;
        return $this;
    }

    /**
     * Getter for continuousOptionsSendingIntervalSeconds
     *
     * @ElementName continuousOptionsSendingIntervalSeconds
     * @return int|null
     */
    public function getContinuousOptionsSendingIntervalSeconds()
    {
        return $this->continuousOptionsSendingIntervalSeconds;
    }

    /**
     * Setter for continuousOptionsSendingIntervalSeconds
     *
     * @ElementName continuousOptionsSendingIntervalSeconds
     * @param int|null $continuousOptionsSendingIntervalSeconds
     * @return $this
     */
    public function setContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds)
    {
        $this->continuousOptionsSendingIntervalSeconds = $continuousOptionsSendingIntervalSeconds;
        return $this;
    }

    /**
     * Getter for failureOptionsSendingIntervalSeconds
     *
     * @ElementName failureOptionsSendingIntervalSeconds
     * @return int|null
     */
    public function getFailureOptionsSendingIntervalSeconds()
    {
        return $this->failureOptionsSendingIntervalSeconds;
    }

    /**
     * Setter for failureOptionsSendingIntervalSeconds
     *
     * @ElementName failureOptionsSendingIntervalSeconds
     * @param int|null $failureOptionsSendingIntervalSeconds
     * @return $this
     */
    public function setFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds)
    {
        $this->failureOptionsSendingIntervalSeconds = $failureOptionsSendingIntervalSeconds;
        return $this;
    }

    /**
     * Getter for failureThresholdCounter
     *
     * @ElementName failureThresholdCounter
     * @return int|null
     */
    public function getFailureThresholdCounter()
    {
        return $this->failureThresholdCounter;
    }

    /**
     * Setter for failureThresholdCounter
     *
     * @ElementName failureThresholdCounter
     * @param int|null $failureThresholdCounter
     * @return $this
     */
    public function setFailureThresholdCounter($failureThresholdCounter)
    {
        $this->failureThresholdCounter = $failureThresholdCounter;
        return $this;
    }

    /**
     * Getter for successThresholdCounter
     *
     * @ElementName successThresholdCounter
     * @return int|null
     */
    public function getSuccessThresholdCounter()
    {
        return $this->successThresholdCounter;
    }

    /**
     * Setter for successThresholdCounter
     *
     * @ElementName successThresholdCounter
     * @param int|null $successThresholdCounter
     * @return $this
     */
    public function setSuccessThresholdCounter($successThresholdCounter)
    {
        $this->successThresholdCounter = $successThresholdCounter;
        return $this;
    }

    /**
     * Getter for inviteFailureThresholdCounter
     *
     * @ElementName inviteFailureThresholdCounter
     * @return int|null
     */
    public function getInviteFailureThresholdCounter()
    {
        return $this->inviteFailureThresholdCounter;
    }

    /**
     * Setter for inviteFailureThresholdCounter
     *
     * @ElementName inviteFailureThresholdCounter
     * @param int|null $inviteFailureThresholdCounter
     * @return $this
     */
    public function setInviteFailureThresholdCounter($inviteFailureThresholdCounter)
    {
        $this->inviteFailureThresholdCounter = $inviteFailureThresholdCounter;
        return $this;
    }

    /**
     * Getter for inviteFailureThresholdWindowSeconds
     *
     * @ElementName inviteFailureThresholdWindowSeconds
     * @return int|null
     */
    public function getInviteFailureThresholdWindowSeconds()
    {
        return $this->inviteFailureThresholdWindowSeconds;
    }

    /**
     * Setter for inviteFailureThresholdWindowSeconds
     *
     * @ElementName inviteFailureThresholdWindowSeconds
     * @param int|null $inviteFailureThresholdWindowSeconds
     * @return $this
     */
    public function setInviteFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds)
    {
        $this->inviteFailureThresholdWindowSeconds = $inviteFailureThresholdWindowSeconds;
        return $this;
    }

    /**
     * Getter for trunkGroupState
     *
     * @ElementName trunkGroupState
     * @return string|null
     */
    public function getTrunkGroupState()
    {
        return $this->trunkGroupState;
    }

    /**
     * Setter for trunkGroupState
     *
     * @ElementName trunkGroupState
     * @param string|null $trunkGroupState
     * @return $this
     */
    public function setTrunkGroupState($trunkGroupState)
    {
        $this->trunkGroupState = $trunkGroupState;
        return $this;
    }

    /**
     * Getter for pilotUserCallingLineAssertedIdentityPolicy
     *
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @return string|null
     */
    public function getPilotUserCallingLineAssertedIdentityPolicy()
    {
        return $this->pilotUserCallingLineAssertedIdentityPolicy;
    }

    /**
     * Setter for pilotUserCallingLineAssertedIdentityPolicy
     *
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @param string|null $pilotUserCallingLineAssertedIdentityPolicy
     * @return $this
     */
    public function setPilotUserCallingLineAssertedIdentityPolicy($pilotUserCallingLineAssertedIdentityPolicy)
    {
        $this->pilotUserCallingLineAssertedIdentityPolicy = $pilotUserCallingLineAssertedIdentityPolicy;
        return $this;
    }

    /**
     * Getter for useSystemCallingLineAssertedIdentityPolicy
     *
     * @ElementName useSystemCallingLineAssertedIdentityPolicy
     * @return bool|null
     */
    public function getUseSystemCallingLineAssertedIdentityPolicy()
    {
        return $this->useSystemCallingLineAssertedIdentityPolicy;
    }

    /**
     * Setter for useSystemCallingLineAssertedIdentityPolicy
     *
     * @ElementName useSystemCallingLineAssertedIdentityPolicy
     * @param bool|null $useSystemCallingLineAssertedIdentityPolicy
     * @return $this
     */
    public function setUseSystemCallingLineAssertedIdentityPolicy($useSystemCallingLineAssertedIdentityPolicy)
    {
        $this->useSystemCallingLineAssertedIdentityPolicy = $useSystemCallingLineAssertedIdentityPolicy;
        return $this;
    }

    /**
     * Getter for totalActiveIncomingCalls
     *
     * @ElementName totalActiveIncomingCalls
     * @return int|null
     */
    public function getTotalActiveIncomingCalls()
    {
        return $this->totalActiveIncomingCalls;
    }

    /**
     * Setter for totalActiveIncomingCalls
     *
     * @ElementName totalActiveIncomingCalls
     * @param int|null $totalActiveIncomingCalls
     * @return $this
     */
    public function setTotalActiveIncomingCalls($totalActiveIncomingCalls)
    {
        $this->totalActiveIncomingCalls = $totalActiveIncomingCalls;
        return $this;
    }

    /**
     * Getter for totalActiveOutgoingCalls
     *
     * @ElementName totalActiveOutgoingCalls
     * @return int|null
     */
    public function getTotalActiveOutgoingCalls()
    {
        return $this->totalActiveOutgoingCalls;
    }

    /**
     * Setter for totalActiveOutgoingCalls
     *
     * @ElementName totalActiveOutgoingCalls
     * @param int|null $totalActiveOutgoingCalls
     * @return $this
     */
    public function setTotalActiveOutgoingCalls($totalActiveOutgoingCalls)
    {
        $this->totalActiveOutgoingCalls = $totalActiveOutgoingCalls;
        return $this;
    }

    /**
     * Getter for pilotUserCallOptimizationPolicy
     *
     * @ElementName pilotUserCallOptimizationPolicy
     * @return string|null
     */
    public function getPilotUserCallOptimizationPolicy()
    {
        return $this->pilotUserCallOptimizationPolicy;
    }

    /**
     * Setter for pilotUserCallOptimizationPolicy
     *
     * @ElementName pilotUserCallOptimizationPolicy
     * @param string|null $pilotUserCallOptimizationPolicy
     * @return $this
     */
    public function setPilotUserCallOptimizationPolicy($pilotUserCallOptimizationPolicy)
    {
        $this->pilotUserCallOptimizationPolicy = $pilotUserCallOptimizationPolicy;
        return $this;
    }

    /**
     * Getter for clidSourceForScreenedCallsPolicy
     *
     * @ElementName clidSourceForScreenedCallsPolicy
     * @return string|null
     */
    public function getClidSourceForScreenedCallsPolicy()
    {
        return $this->clidSourceForScreenedCallsPolicy;
    }

    /**
     * Setter for clidSourceForScreenedCallsPolicy
     *
     * @ElementName clidSourceForScreenedCallsPolicy
     * @param string|null $clidSourceForScreenedCallsPolicy
     * @return $this
     */
    public function setClidSourceForScreenedCallsPolicy($clidSourceForScreenedCallsPolicy)
    {
        $this->clidSourceForScreenedCallsPolicy = $clidSourceForScreenedCallsPolicy;
        return $this;
    }

    /**
     * Getter for useSystemCLIDSourceForScreenedCallsPolicy
     *
     * @ElementName useSystemCLIDSourceForScreenedCallsPolicy
     * @return bool|null
     */
    public function getUseSystemCLIDSourceForScreenedCallsPolicy()
    {
        return $this->useSystemCLIDSourceForScreenedCallsPolicy;
    }

    /**
     * Setter for useSystemCLIDSourceForScreenedCallsPolicy
     *
     * @ElementName useSystemCLIDSourceForScreenedCallsPolicy
     * @param bool|null $useSystemCLIDSourceForScreenedCallsPolicy
     * @return $this
     */
    public function setUseSystemCLIDSourceForScreenedCallsPolicy($useSystemCLIDSourceForScreenedCallsPolicy)
    {
        $this->useSystemCLIDSourceForScreenedCallsPolicy = $useSystemCLIDSourceForScreenedCallsPolicy;
        return $this;
    }

    /**
     * Getter for userLookupPolicy
     *
     * @ElementName userLookupPolicy
     * @return string|null
     */
    public function getUserLookupPolicy()
    {
        return $this->userLookupPolicy;
    }

    /**
     * Setter for userLookupPolicy
     *
     * @ElementName userLookupPolicy
     * @param string|null $userLookupPolicy
     * @return $this
     */
    public function setUserLookupPolicy($userLookupPolicy)
    {
        $this->userLookupPolicy = $userLookupPolicy;
        return $this;
    }

    /**
     * Getter for useSystemUserLookupPolicy
     *
     * @ElementName useSystemUserLookupPolicy
     * @return bool|null
     */
    public function getUseSystemUserLookupPolicy()
    {
        return $this->useSystemUserLookupPolicy;
    }

    /**
     * Setter for useSystemUserLookupPolicy
     *
     * @ElementName useSystemUserLookupPolicy
     * @param bool|null $useSystemUserLookupPolicy
     * @return $this
     */
    public function setUseSystemUserLookupPolicy($useSystemUserLookupPolicy)
    {
        $this->useSystemUserLookupPolicy = $useSystemUserLookupPolicy;
        return $this;
    }

    /**
     * Getter for pilotUserCallingLineIdentityForEmergencyCallsPolicy
     *
     * @ElementName pilotUserCallingLineIdentityForEmergencyCallsPolicy
     * @return string|null
     */
    public function getPilotUserCallingLineIdentityForEmergencyCallsPolicy()
    {
        return $this->pilotUserCallingLineIdentityForEmergencyCallsPolicy;
    }

    /**
     * Setter for pilotUserCallingLineIdentityForEmergencyCallsPolicy
     *
     * @ElementName pilotUserCallingLineIdentityForEmergencyCallsPolicy
     * @param string|null $pilotUserCallingLineIdentityForEmergencyCallsPolicy
     * @return $this
     */
    public function setPilotUserCallingLineIdentityForEmergencyCallsPolicy($pilotUserCallingLineIdentityForEmergencyCallsPolicy)
    {
        $this->pilotUserCallingLineIdentityForEmergencyCallsPolicy = $pilotUserCallingLineIdentityForEmergencyCallsPolicy;
        return $this;
    }


}

