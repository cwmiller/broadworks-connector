<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupModifyRequest
 *
 * Modify the system level data associated with the Trunk Group Service. 
 *         Following attributes are only used in IMS mode. The values are saved if
 * specified not in IMS mode:
 * 	        implicitRegistrationSetSupportPolicy
 * 	        sipIdentityForPilotAndProxyTrunkModesPolicy
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTrunkGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enforceCLIDServiceAssignmentForPilotUser
     * @var bool|null
     */
    private $enforceCLIDServiceAssignmentForPilotUser = null;

    /**
     * @ElementName terminateUnreachableTriggerDetectionOnReceiptOf18x
     * @var bool|null
     */
    private $terminateUnreachableTriggerDetectionOnReceiptOf18x = null;

    /**
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy|null
     */
    private $pilotUserCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName enforceOutOfDialogPBXRedirectionPolicies
     * @var bool|null
     */
    private $enforceOutOfDialogPBXRedirectionPolicies = null;

    /**
     * @ElementName unscreenedRedirectionHandling
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling|null
     */
    private $unscreenedRedirectionHandling = null;

    /**
     * @ElementName enableHoldoverOfHighwaterCallCounts
     * @var bool|null
     */
    private $enableHoldoverOfHighwaterCallCounts = null;

    /**
     * @ElementName holdoverPeriod
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes|null
     */
    private $holdoverPeriod = null;

    /**
     * @ElementName timeZoneOffsetMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes|null
     */
    private $timeZoneOffsetMinutes = null;

    /**
     * @ElementName clidSourceForScreenedCallsPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy|null
     */
    private $clidSourceForScreenedCallsPolicy = null;

    /**
     * @ElementName userLookupPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy|null
     */
    private $userLookupPolicy = null;

    /**
     * @ElementName outOfDialogPBXRedirectionCLIDMapping
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping|null
     */
    private $outOfDialogPBXRedirectionCLIDMapping = null;

    /**
     * @ElementName enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     * @var bool|null
     */
    private $enforceOutOfDialogPBXRedirectionTrunkGroupCapacity = null;

    /**
     * @ElementName implicitRegistrationSetSupportPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy|null
     */
    private $implicitRegistrationSetSupportPolicy = null;

    /**
     * @ElementName sipIdentityForPilotAndProxyTrunkModesPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy|null
     */
    private $sipIdentityForPilotAndProxyTrunkModesPolicy = null;

    /**
     * @ElementName supportConnectedIdentityPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy|null
     */
    private $supportConnectedIdentityPolicy = null;

    /**
     * @ElementName useUnmappedSessionsForTrunkUsers
     * @var bool|null
     */
    private $useUnmappedSessionsForTrunkUsers = null;

    /**
     * Getter for enforceCLIDServiceAssignmentForPilotUser
     *
     * @ElementName enforceCLIDServiceAssignmentForPilotUser
     * @return bool|null
     */
    public function getEnforceCLIDServiceAssignmentForPilotUser()
    {
        return $this->enforceCLIDServiceAssignmentForPilotUser;
    }

    /**
     * Setter for enforceCLIDServiceAssignmentForPilotUser
     *
     * @ElementName enforceCLIDServiceAssignmentForPilotUser
     * @param bool|null $enforceCLIDServiceAssignmentForPilotUser
     * @return $this
     */
    public function setEnforceCLIDServiceAssignmentForPilotUser($enforceCLIDServiceAssignmentForPilotUser)
    {
        $this->enforceCLIDServiceAssignmentForPilotUser = $enforceCLIDServiceAssignmentForPilotUser;
        return $this;
    }

    /**
     * Getter for terminateUnreachableTriggerDetectionOnReceiptOf18x
     *
     * @ElementName terminateUnreachableTriggerDetectionOnReceiptOf18x
     * @return bool|null
     */
    public function getTerminateUnreachableTriggerDetectionOnReceiptOf18x()
    {
        return $this->terminateUnreachableTriggerDetectionOnReceiptOf18x;
    }

    /**
     * Setter for terminateUnreachableTriggerDetectionOnReceiptOf18x
     *
     * @ElementName terminateUnreachableTriggerDetectionOnReceiptOf18x
     * @param bool|null $terminateUnreachableTriggerDetectionOnReceiptOf18x
     * @return $this
     */
    public function setTerminateUnreachableTriggerDetectionOnReceiptOf18x($terminateUnreachableTriggerDetectionOnReceiptOf18x)
    {
        $this->terminateUnreachableTriggerDetectionOnReceiptOf18x = $terminateUnreachableTriggerDetectionOnReceiptOf18x;
        return $this;
    }

    /**
     * Getter for pilotUserCallingLineAssertedIdentityPolicy
     *
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy|null
     */
    public function getPilotUserCallingLineAssertedIdentityPolicy()
    {
        return $this->pilotUserCallingLineAssertedIdentityPolicy;
    }

    /**
     * Setter for pilotUserCallingLineAssertedIdentityPolicy
     *
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy|null $pilotUserCallingLineAssertedIdentityPolicy
     * @return $this
     */
    public function setPilotUserCallingLineAssertedIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy $pilotUserCallingLineAssertedIdentityPolicy)
    {
        $this->pilotUserCallingLineAssertedIdentityPolicy = $pilotUserCallingLineAssertedIdentityPolicy;
        return $this;
    }

    /**
     * Getter for enforceOutOfDialogPBXRedirectionPolicies
     *
     * @ElementName enforceOutOfDialogPBXRedirectionPolicies
     * @return bool|null
     */
    public function getEnforceOutOfDialogPBXRedirectionPolicies()
    {
        return $this->enforceOutOfDialogPBXRedirectionPolicies;
    }

    /**
     * Setter for enforceOutOfDialogPBXRedirectionPolicies
     *
     * @ElementName enforceOutOfDialogPBXRedirectionPolicies
     * @param bool|null $enforceOutOfDialogPBXRedirectionPolicies
     * @return $this
     */
    public function setEnforceOutOfDialogPBXRedirectionPolicies($enforceOutOfDialogPBXRedirectionPolicies)
    {
        $this->enforceOutOfDialogPBXRedirectionPolicies = $enforceOutOfDialogPBXRedirectionPolicies;
        return $this;
    }

    /**
     * Getter for unscreenedRedirectionHandling
     *
     * @ElementName unscreenedRedirectionHandling
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling|null
     */
    public function getUnscreenedRedirectionHandling()
    {
        return $this->unscreenedRedirectionHandling;
    }

    /**
     * Setter for unscreenedRedirectionHandling
     *
     * @ElementName unscreenedRedirectionHandling
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling|null $unscreenedRedirectionHandling
     * @return $this
     */
    public function setUnscreenedRedirectionHandling(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling $unscreenedRedirectionHandling)
    {
        $this->unscreenedRedirectionHandling = $unscreenedRedirectionHandling;
        return $this;
    }

    /**
     * Getter for enableHoldoverOfHighwaterCallCounts
     *
     * @ElementName enableHoldoverOfHighwaterCallCounts
     * @return bool|null
     */
    public function getEnableHoldoverOfHighwaterCallCounts()
    {
        return $this->enableHoldoverOfHighwaterCallCounts;
    }

    /**
     * Setter for enableHoldoverOfHighwaterCallCounts
     *
     * @ElementName enableHoldoverOfHighwaterCallCounts
     * @param bool|null $enableHoldoverOfHighwaterCallCounts
     * @return $this
     */
    public function setEnableHoldoverOfHighwaterCallCounts($enableHoldoverOfHighwaterCallCounts)
    {
        $this->enableHoldoverOfHighwaterCallCounts = $enableHoldoverOfHighwaterCallCounts;
        return $this;
    }

    /**
     * Getter for holdoverPeriod
     *
     * @ElementName holdoverPeriod
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes|null
     */
    public function getHoldoverPeriod()
    {
        return $this->holdoverPeriod;
    }

    /**
     * Setter for holdoverPeriod
     *
     * @ElementName holdoverPeriod
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes|null $holdoverPeriod
     * @return $this
     */
    public function setHoldoverPeriod(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes $holdoverPeriod)
    {
        $this->holdoverPeriod = $holdoverPeriod;
        return $this;
    }

    /**
     * Getter for timeZoneOffsetMinutes
     *
     * @ElementName timeZoneOffsetMinutes
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes|null
     */
    public function getTimeZoneOffsetMinutes()
    {
        return $this->timeZoneOffsetMinutes;
    }

    /**
     * Setter for timeZoneOffsetMinutes
     *
     * @ElementName timeZoneOffsetMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes|null $timeZoneOffsetMinutes
     * @return $this
     */
    public function setTimeZoneOffsetMinutes(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes $timeZoneOffsetMinutes)
    {
        $this->timeZoneOffsetMinutes = $timeZoneOffsetMinutes;
        return $this;
    }

    /**
     * Getter for clidSourceForScreenedCallsPolicy
     *
     * @ElementName clidSourceForScreenedCallsPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy|null
     */
    public function getClidSourceForScreenedCallsPolicy()
    {
        return $this->clidSourceForScreenedCallsPolicy;
    }

    /**
     * Setter for clidSourceForScreenedCallsPolicy
     *
     * @ElementName clidSourceForScreenedCallsPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy|null $clidSourceForScreenedCallsPolicy
     * @return $this
     */
    public function setClidSourceForScreenedCallsPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy $clidSourceForScreenedCallsPolicy)
    {
        $this->clidSourceForScreenedCallsPolicy = $clidSourceForScreenedCallsPolicy;
        return $this;
    }

    /**
     * Getter for userLookupPolicy
     *
     * @ElementName userLookupPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy|null
     */
    public function getUserLookupPolicy()
    {
        return $this->userLookupPolicy;
    }

    /**
     * Setter for userLookupPolicy
     *
     * @ElementName userLookupPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy|null $userLookupPolicy
     * @return $this
     */
    public function setUserLookupPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy $userLookupPolicy)
    {
        $this->userLookupPolicy = $userLookupPolicy;
        return $this;
    }

    /**
     * Getter for outOfDialogPBXRedirectionCLIDMapping
     *
     * @ElementName outOfDialogPBXRedirectionCLIDMapping
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping|null
     */
    public function getOutOfDialogPBXRedirectionCLIDMapping()
    {
        return $this->outOfDialogPBXRedirectionCLIDMapping;
    }

    /**
     * Setter for outOfDialogPBXRedirectionCLIDMapping
     *
     * @ElementName outOfDialogPBXRedirectionCLIDMapping
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping|null $outOfDialogPBXRedirectionCLIDMapping
     * @return $this
     */
    public function setOutOfDialogPBXRedirectionCLIDMapping(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping $outOfDialogPBXRedirectionCLIDMapping)
    {
        $this->outOfDialogPBXRedirectionCLIDMapping = $outOfDialogPBXRedirectionCLIDMapping;
        return $this;
    }

    /**
     * Getter for enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     *
     * @ElementName enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     * @return bool|null
     */
    public function getEnforceOutOfDialogPBXRedirectionTrunkGroupCapacity()
    {
        return $this->enforceOutOfDialogPBXRedirectionTrunkGroupCapacity;
    }

    /**
     * Setter for enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     *
     * @ElementName enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     * @param bool|null $enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     * @return $this
     */
    public function setEnforceOutOfDialogPBXRedirectionTrunkGroupCapacity($enforceOutOfDialogPBXRedirectionTrunkGroupCapacity)
    {
        $this->enforceOutOfDialogPBXRedirectionTrunkGroupCapacity = $enforceOutOfDialogPBXRedirectionTrunkGroupCapacity;
        return $this;
    }

    /**
     * Getter for implicitRegistrationSetSupportPolicy
     *
     * @ElementName implicitRegistrationSetSupportPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy|null
     */
    public function getImplicitRegistrationSetSupportPolicy()
    {
        return $this->implicitRegistrationSetSupportPolicy;
    }

    /**
     * Setter for implicitRegistrationSetSupportPolicy
     *
     * @ElementName implicitRegistrationSetSupportPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy|null $implicitRegistrationSetSupportPolicy
     * @return $this
     */
    public function setImplicitRegistrationSetSupportPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy $implicitRegistrationSetSupportPolicy)
    {
        $this->implicitRegistrationSetSupportPolicy = $implicitRegistrationSetSupportPolicy;
        return $this;
    }

    /**
     * Getter for sipIdentityForPilotAndProxyTrunkModesPolicy
     *
     * @ElementName sipIdentityForPilotAndProxyTrunkModesPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy|null
     */
    public function getSipIdentityForPilotAndProxyTrunkModesPolicy()
    {
        return $this->sipIdentityForPilotAndProxyTrunkModesPolicy;
    }

    /**
     * Setter for sipIdentityForPilotAndProxyTrunkModesPolicy
     *
     * @ElementName sipIdentityForPilotAndProxyTrunkModesPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy|null $sipIdentityForPilotAndProxyTrunkModesPolicy
     * @return $this
     */
    public function setSipIdentityForPilotAndProxyTrunkModesPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy $sipIdentityForPilotAndProxyTrunkModesPolicy)
    {
        $this->sipIdentityForPilotAndProxyTrunkModesPolicy = $sipIdentityForPilotAndProxyTrunkModesPolicy;
        return $this;
    }

    /**
     * Getter for supportConnectedIdentityPolicy
     *
     * @ElementName supportConnectedIdentityPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy|null
     */
    public function getSupportConnectedIdentityPolicy()
    {
        return $this->supportConnectedIdentityPolicy;
    }

    /**
     * Setter for supportConnectedIdentityPolicy
     *
     * @ElementName supportConnectedIdentityPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy|null $supportConnectedIdentityPolicy
     * @return $this
     */
    public function setSupportConnectedIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy $supportConnectedIdentityPolicy)
    {
        $this->supportConnectedIdentityPolicy = $supportConnectedIdentityPolicy;
        return $this;
    }

    /**
     * Getter for useUnmappedSessionsForTrunkUsers
     *
     * @ElementName useUnmappedSessionsForTrunkUsers
     * @return bool|null
     */
    public function getUseUnmappedSessionsForTrunkUsers()
    {
        return $this->useUnmappedSessionsForTrunkUsers;
    }

    /**
     * Setter for useUnmappedSessionsForTrunkUsers
     *
     * @ElementName useUnmappedSessionsForTrunkUsers
     * @param bool|null $useUnmappedSessionsForTrunkUsers
     * @return $this
     */
    public function setUseUnmappedSessionsForTrunkUsers($useUnmappedSessionsForTrunkUsers)
    {
        $this->useUnmappedSessionsForTrunkUsers = $useUnmappedSessionsForTrunkUsers;
        return $this;
    }


}

