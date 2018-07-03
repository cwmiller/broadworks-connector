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
     * @var string|null
     */
    private $pilotUserCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName enforceOutOfDialogPBXRedirectionPolicies
     * @var bool|null
     */
    private $enforceOutOfDialogPBXRedirectionPolicies = null;

    /**
     * @ElementName unscreenedRedirectionHandling
     * @var string|null
     */
    private $unscreenedRedirectionHandling = null;

    /**
     * @ElementName enableHoldoverOfHighwaterCallCounts
     * @var bool|null
     */
    private $enableHoldoverOfHighwaterCallCounts = null;

    /**
     * @ElementName holdoverPeriod
     * @var int|null
     */
    private $holdoverPeriod = null;

    /**
     * @ElementName timeZoneOffsetMinutes
     * @var int|null
     */
    private $timeZoneOffsetMinutes = null;

    /**
     * @ElementName clidSourceForScreenedCallsPolicy
     * @var string|null
     */
    private $clidSourceForScreenedCallsPolicy = null;

    /**
     * @ElementName userLookupPolicy
     * @var string|null
     */
    private $userLookupPolicy = null;

    /**
     * @ElementName outOfDialogPBXRedirectionCLIDMapping
     * @var string|null
     */
    private $outOfDialogPBXRedirectionCLIDMapping = null;

    /**
     * @ElementName enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     * @var bool|null
     */
    private $enforceOutOfDialogPBXRedirectionTrunkGroupCapacity = null;

    /**
     * @ElementName implicitRegistrationSetSupportPolicy
     * @var string|null
     */
    private $implicitRegistrationSetSupportPolicy = null;

    /**
     * @ElementName sipIdentityForPilotAndProxyTrunkModesPolicy
     * @var string|null
     */
    private $sipIdentityForPilotAndProxyTrunkModesPolicy = null;

    /**
     * @ElementName supportConnectedIdentityPolicy
     * @var string|null
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
     * @return string|null
     */
    public function getUnscreenedRedirectionHandling()
    {
        return $this->unscreenedRedirectionHandling;
    }

    /**
     * Setter for unscreenedRedirectionHandling
     *
     * @ElementName unscreenedRedirectionHandling
     * @param string|null $unscreenedRedirectionHandling
     * @return $this
     */
    public function setUnscreenedRedirectionHandling($unscreenedRedirectionHandling)
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
     * @return int|null
     */
    public function getHoldoverPeriod()
    {
        return $this->holdoverPeriod;
    }

    /**
     * Setter for holdoverPeriod
     *
     * @ElementName holdoverPeriod
     * @param int|null $holdoverPeriod
     * @return $this
     */
    public function setHoldoverPeriod($holdoverPeriod)
    {
        $this->holdoverPeriod = $holdoverPeriod;
        return $this;
    }

    /**
     * Getter for timeZoneOffsetMinutes
     *
     * @ElementName timeZoneOffsetMinutes
     * @return int|null
     */
    public function getTimeZoneOffsetMinutes()
    {
        return $this->timeZoneOffsetMinutes;
    }

    /**
     * Setter for timeZoneOffsetMinutes
     *
     * @ElementName timeZoneOffsetMinutes
     * @param int|null $timeZoneOffsetMinutes
     * @return $this
     */
    public function setTimeZoneOffsetMinutes($timeZoneOffsetMinutes)
    {
        $this->timeZoneOffsetMinutes = $timeZoneOffsetMinutes;
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
     * Getter for outOfDialogPBXRedirectionCLIDMapping
     *
     * @ElementName outOfDialogPBXRedirectionCLIDMapping
     * @return string|null
     */
    public function getOutOfDialogPBXRedirectionCLIDMapping()
    {
        return $this->outOfDialogPBXRedirectionCLIDMapping;
    }

    /**
     * Setter for outOfDialogPBXRedirectionCLIDMapping
     *
     * @ElementName outOfDialogPBXRedirectionCLIDMapping
     * @param string|null $outOfDialogPBXRedirectionCLIDMapping
     * @return $this
     */
    public function setOutOfDialogPBXRedirectionCLIDMapping($outOfDialogPBXRedirectionCLIDMapping)
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
     * @return string|null
     */
    public function getImplicitRegistrationSetSupportPolicy()
    {
        return $this->implicitRegistrationSetSupportPolicy;
    }

    /**
     * Setter for implicitRegistrationSetSupportPolicy
     *
     * @ElementName implicitRegistrationSetSupportPolicy
     * @param string|null $implicitRegistrationSetSupportPolicy
     * @return $this
     */
    public function setImplicitRegistrationSetSupportPolicy($implicitRegistrationSetSupportPolicy)
    {
        $this->implicitRegistrationSetSupportPolicy = $implicitRegistrationSetSupportPolicy;
        return $this;
    }

    /**
     * Getter for sipIdentityForPilotAndProxyTrunkModesPolicy
     *
     * @ElementName sipIdentityForPilotAndProxyTrunkModesPolicy
     * @return string|null
     */
    public function getSipIdentityForPilotAndProxyTrunkModesPolicy()
    {
        return $this->sipIdentityForPilotAndProxyTrunkModesPolicy;
    }

    /**
     * Setter for sipIdentityForPilotAndProxyTrunkModesPolicy
     *
     * @ElementName sipIdentityForPilotAndProxyTrunkModesPolicy
     * @param string|null $sipIdentityForPilotAndProxyTrunkModesPolicy
     * @return $this
     */
    public function setSipIdentityForPilotAndProxyTrunkModesPolicy($sipIdentityForPilotAndProxyTrunkModesPolicy)
    {
        $this->sipIdentityForPilotAndProxyTrunkModesPolicy = $sipIdentityForPilotAndProxyTrunkModesPolicy;
        return $this;
    }

    /**
     * Getter for supportConnectedIdentityPolicy
     *
     * @ElementName supportConnectedIdentityPolicy
     * @return string|null
     */
    public function getSupportConnectedIdentityPolicy()
    {
        return $this->supportConnectedIdentityPolicy;
    }

    /**
     * Setter for supportConnectedIdentityPolicy
     *
     * @ElementName supportConnectedIdentityPolicy
     * @param string|null $supportConnectedIdentityPolicy
     * @return $this
     */
    public function setSupportConnectedIdentityPolicy($supportConnectedIdentityPolicy)
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

