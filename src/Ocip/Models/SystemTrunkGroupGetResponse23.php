<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupGetResponse23
 *
 * Response to SystemTrunkGroupGetRequest23.
 *         Following attributes are only used in IMS mode:
 *           implicitRegistrationSetSupportPolicy
 *           sipIdentityForPilotAndProxyTrunkModesPolicy
 *           
 *         Replaced by: SystemTrunkGroupGetResponse24
 *
 * @see SystemTrunkGroupGetRequest23
 * @see SystemTrunkGroupGetResponse24
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:35969","type":"sequence"}]
 */
class SystemTrunkGroupGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enforceCLIDServiceAssignmentForPilotUser
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var bool|null
     */
    private $enforceCLIDServiceAssignmentForPilotUser = null;

    /**
     * @ElementName terminateUnreachableTriggerDetectionOnReceiptOf18x
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var bool|null
     */
    private $terminateUnreachableTriggerDetectionOnReceiptOf18x = null;

    /**
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy|null
     */
    private $pilotUserCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName enforceOutOfDialogPBXRedirectionPolicies
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var bool|null
     */
    private $enforceOutOfDialogPBXRedirectionPolicies = null;

    /**
     * @ElementName unscreenedRedirectionHandling
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling|null
     */
    private $unscreenedRedirectionHandling = null;

    /**
     * @ElementName enableHoldoverOfHighwaterCallCounts
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var bool|null
     */
    private $enableHoldoverOfHighwaterCallCounts = null;

    /**
     * @ElementName holdoverPeriod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes|null
     */
    private $holdoverPeriod = null;

    /**
     * @ElementName timeZoneOffsetMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes|null
     */
    private $timeZoneOffsetMinutes = null;

    /**
     * @ElementName clidSourceForScreenedCallsPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy|null
     */
    private $clidSourceForScreenedCallsPolicy = null;

    /**
     * @ElementName userLookupPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy|null
     */
    private $userLookupPolicy = null;

    /**
     * @ElementName outOfDialogPBXRedirectionCLIDMapping
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping|null
     */
    private $outOfDialogPBXRedirectionCLIDMapping = null;

    /**
     * @ElementName enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var bool|null
     */
    private $enforceOutOfDialogPBXRedirectionTrunkGroupCapacity = null;

    /**
     * @ElementName implicitRegistrationSetSupportPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupImplicitRegistrationSetSupportPolicy|null
     */
    private $implicitRegistrationSetSupportPolicy = null;

    /**
     * @ElementName sipIdentityForPilotAndProxyTrunkModesPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSIPIdentityForPilotAndProxyTrunkModesPolicy|null
     */
    private $sipIdentityForPilotAndProxyTrunkModesPolicy = null;

    /**
     * @ElementName supportConnectedIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupSupportConnectedIdentityPolicy|null
     */
    private $supportConnectedIdentityPolicy = null;

    /**
     * @ElementName useUnmappedSessionsForTrunkUsers
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var bool|null
     */
    private $useUnmappedSessionsForTrunkUsers = null;

    /**
     * @ElementName allowPAILookupForOutOfDialogPBXRedirection
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var bool|null
     */
    private $allowPAILookupForOutOfDialogPBXRedirection = null;

    /**
     * @ElementName outOfDialogPBXRedirectionOriginatorLookupPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy|null
     */
    private $outOfDialogPBXRedirectionOriginatorLookupPolicy = null;

    /**
     * @ElementName allowTrunkIdentityForAllOriginations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35969
     * @var bool|null
     */
    private $allowTrunkIdentityForAllOriginations = null;

    /**
     * Getter for enforceCLIDServiceAssignmentForPilotUser
     *
     * @return bool
     */
    public function getEnforceCLIDServiceAssignmentForPilotUser()
    {
        return $this->enforceCLIDServiceAssignmentForPilotUser instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceCLIDServiceAssignmentForPilotUser;
    }

    /**
     * Setter for enforceCLIDServiceAssignmentForPilotUser
     *
     * @param bool $enforceCLIDServiceAssignmentForPilotUser
     * @return $this
     */
    public function setEnforceCLIDServiceAssignmentForPilotUser($enforceCLIDServiceAssignmentForPilotUser)
    {
        $this->enforceCLIDServiceAssignmentForPilotUser = $enforceCLIDServiceAssignmentForPilotUser;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceCLIDServiceAssignmentForPilotUser()
    {
        $this->enforceCLIDServiceAssignmentForPilotUser = null;
        return $this;
    }

    /**
     * Getter for terminateUnreachableTriggerDetectionOnReceiptOf18x
     *
     * @return bool
     */
    public function getTerminateUnreachableTriggerDetectionOnReceiptOf18x()
    {
        return $this->terminateUnreachableTriggerDetectionOnReceiptOf18x instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminateUnreachableTriggerDetectionOnReceiptOf18x;
    }

    /**
     * Setter for terminateUnreachableTriggerDetectionOnReceiptOf18x
     *
     * @param bool $terminateUnreachableTriggerDetectionOnReceiptOf18x
     * @return $this
     */
    public function setTerminateUnreachableTriggerDetectionOnReceiptOf18x($terminateUnreachableTriggerDetectionOnReceiptOf18x)
    {
        $this->terminateUnreachableTriggerDetectionOnReceiptOf18x = $terminateUnreachableTriggerDetectionOnReceiptOf18x;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminateUnreachableTriggerDetectionOnReceiptOf18x()
    {
        $this->terminateUnreachableTriggerDetectionOnReceiptOf18x = null;
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
     * Getter for enforceOutOfDialogPBXRedirectionPolicies
     *
     * @return bool
     */
    public function getEnforceOutOfDialogPBXRedirectionPolicies()
    {
        return $this->enforceOutOfDialogPBXRedirectionPolicies instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceOutOfDialogPBXRedirectionPolicies;
    }

    /**
     * Setter for enforceOutOfDialogPBXRedirectionPolicies
     *
     * @param bool $enforceOutOfDialogPBXRedirectionPolicies
     * @return $this
     */
    public function setEnforceOutOfDialogPBXRedirectionPolicies($enforceOutOfDialogPBXRedirectionPolicies)
    {
        $this->enforceOutOfDialogPBXRedirectionPolicies = $enforceOutOfDialogPBXRedirectionPolicies;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceOutOfDialogPBXRedirectionPolicies()
    {
        $this->enforceOutOfDialogPBXRedirectionPolicies = null;
        return $this;
    }

    /**
     * Getter for unscreenedRedirectionHandling
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling
     */
    public function getUnscreenedRedirectionHandling()
    {
        return $this->unscreenedRedirectionHandling instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unscreenedRedirectionHandling;
    }

    /**
     * Setter for unscreenedRedirectionHandling
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling $unscreenedRedirectionHandling
     * @return $this
     */
    public function setUnscreenedRedirectionHandling(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling $unscreenedRedirectionHandling)
    {
        $this->unscreenedRedirectionHandling = $unscreenedRedirectionHandling;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnscreenedRedirectionHandling()
    {
        $this->unscreenedRedirectionHandling = null;
        return $this;
    }

    /**
     * Getter for enableHoldoverOfHighwaterCallCounts
     *
     * @return bool
     */
    public function getEnableHoldoverOfHighwaterCallCounts()
    {
        return $this->enableHoldoverOfHighwaterCallCounts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableHoldoverOfHighwaterCallCounts;
    }

    /**
     * Setter for enableHoldoverOfHighwaterCallCounts
     *
     * @param bool $enableHoldoverOfHighwaterCallCounts
     * @return $this
     */
    public function setEnableHoldoverOfHighwaterCallCounts($enableHoldoverOfHighwaterCallCounts)
    {
        $this->enableHoldoverOfHighwaterCallCounts = $enableHoldoverOfHighwaterCallCounts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableHoldoverOfHighwaterCallCounts()
    {
        $this->enableHoldoverOfHighwaterCallCounts = null;
        return $this;
    }

    /**
     * Getter for holdoverPeriod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes
     */
    public function getHoldoverPeriod()
    {
        return $this->holdoverPeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holdoverPeriod;
    }

    /**
     * Setter for holdoverPeriod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes $holdoverPeriod
     * @return $this
     */
    public function setHoldoverPeriod(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes $holdoverPeriod)
    {
        $this->holdoverPeriod = $holdoverPeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoldoverPeriod()
    {
        $this->holdoverPeriod = null;
        return $this;
    }

    /**
     * Getter for timeZoneOffsetMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes
     */
    public function getTimeZoneOffsetMinutes()
    {
        return $this->timeZoneOffsetMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZoneOffsetMinutes;
    }

    /**
     * Setter for timeZoneOffsetMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes $timeZoneOffsetMinutes
     * @return $this
     */
    public function setTimeZoneOffsetMinutes(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes $timeZoneOffsetMinutes)
    {
        $this->timeZoneOffsetMinutes = $timeZoneOffsetMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZoneOffsetMinutes()
    {
        $this->timeZoneOffsetMinutes = null;
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
     * Getter for outOfDialogPBXRedirectionCLIDMapping
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping
     */
    public function getOutOfDialogPBXRedirectionCLIDMapping()
    {
        return $this->outOfDialogPBXRedirectionCLIDMapping instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outOfDialogPBXRedirectionCLIDMapping;
    }

    /**
     * Setter for outOfDialogPBXRedirectionCLIDMapping
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping $outOfDialogPBXRedirectionCLIDMapping
     * @return $this
     */
    public function setOutOfDialogPBXRedirectionCLIDMapping(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionCLIDMapping $outOfDialogPBXRedirectionCLIDMapping)
    {
        $this->outOfDialogPBXRedirectionCLIDMapping = $outOfDialogPBXRedirectionCLIDMapping;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutOfDialogPBXRedirectionCLIDMapping()
    {
        $this->outOfDialogPBXRedirectionCLIDMapping = null;
        return $this;
    }

    /**
     * Getter for enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     *
     * @return bool
     */
    public function getEnforceOutOfDialogPBXRedirectionTrunkGroupCapacity()
    {
        return $this->enforceOutOfDialogPBXRedirectionTrunkGroupCapacity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceOutOfDialogPBXRedirectionTrunkGroupCapacity;
    }

    /**
     * Setter for enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     *
     * @param bool $enforceOutOfDialogPBXRedirectionTrunkGroupCapacity
     * @return $this
     */
    public function setEnforceOutOfDialogPBXRedirectionTrunkGroupCapacity($enforceOutOfDialogPBXRedirectionTrunkGroupCapacity)
    {
        $this->enforceOutOfDialogPBXRedirectionTrunkGroupCapacity = $enforceOutOfDialogPBXRedirectionTrunkGroupCapacity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceOutOfDialogPBXRedirectionTrunkGroupCapacity()
    {
        $this->enforceOutOfDialogPBXRedirectionTrunkGroupCapacity = null;
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
     * Getter for useUnmappedSessionsForTrunkUsers
     *
     * @return bool
     */
    public function getUseUnmappedSessionsForTrunkUsers()
    {
        return $this->useUnmappedSessionsForTrunkUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUnmappedSessionsForTrunkUsers;
    }

    /**
     * Setter for useUnmappedSessionsForTrunkUsers
     *
     * @param bool $useUnmappedSessionsForTrunkUsers
     * @return $this
     */
    public function setUseUnmappedSessionsForTrunkUsers($useUnmappedSessionsForTrunkUsers)
    {
        $this->useUnmappedSessionsForTrunkUsers = $useUnmappedSessionsForTrunkUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUnmappedSessionsForTrunkUsers()
    {
        $this->useUnmappedSessionsForTrunkUsers = null;
        return $this;
    }

    /**
     * Getter for allowPAILookupForOutOfDialogPBXRedirection
     *
     * @return bool
     */
    public function getAllowPAILookupForOutOfDialogPBXRedirection()
    {
        return $this->allowPAILookupForOutOfDialogPBXRedirection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowPAILookupForOutOfDialogPBXRedirection;
    }

    /**
     * Setter for allowPAILookupForOutOfDialogPBXRedirection
     *
     * @param bool $allowPAILookupForOutOfDialogPBXRedirection
     * @return $this
     */
    public function setAllowPAILookupForOutOfDialogPBXRedirection($allowPAILookupForOutOfDialogPBXRedirection)
    {
        $this->allowPAILookupForOutOfDialogPBXRedirection = $allowPAILookupForOutOfDialogPBXRedirection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowPAILookupForOutOfDialogPBXRedirection()
    {
        $this->allowPAILookupForOutOfDialogPBXRedirection = null;
        return $this;
    }

    /**
     * Getter for outOfDialogPBXRedirectionOriginatorLookupPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy
     */
    public function getOutOfDialogPBXRedirectionOriginatorLookupPolicy()
    {
        return $this->outOfDialogPBXRedirectionOriginatorLookupPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outOfDialogPBXRedirectionOriginatorLookupPolicy;
    }

    /**
     * Setter for outOfDialogPBXRedirectionOriginatorLookupPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy $outOfDialogPBXRedirectionOriginatorLookupPolicy
     * @return $this
     */
    public function setOutOfDialogPBXRedirectionOriginatorLookupPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy $outOfDialogPBXRedirectionOriginatorLookupPolicy)
    {
        $this->outOfDialogPBXRedirectionOriginatorLookupPolicy = $outOfDialogPBXRedirectionOriginatorLookupPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutOfDialogPBXRedirectionOriginatorLookupPolicy()
    {
        $this->outOfDialogPBXRedirectionOriginatorLookupPolicy = null;
        return $this;
    }

    /**
     * Getter for allowTrunkIdentityForAllOriginations
     *
     * @return bool
     */
    public function getAllowTrunkIdentityForAllOriginations()
    {
        return $this->allowTrunkIdentityForAllOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTrunkIdentityForAllOriginations;
    }

    /**
     * Setter for allowTrunkIdentityForAllOriginations
     *
     * @param bool $allowTrunkIdentityForAllOriginations
     * @return $this
     */
    public function setAllowTrunkIdentityForAllOriginations($allowTrunkIdentityForAllOriginations)
    {
        $this->allowTrunkIdentityForAllOriginations = $allowTrunkIdentityForAllOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTrunkIdentityForAllOriginations()
    {
        $this->allowTrunkIdentityForAllOriginations = null;
        return $this;
    }


}

