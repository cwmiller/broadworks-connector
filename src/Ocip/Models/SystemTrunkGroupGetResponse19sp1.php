<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupGetResponse19sp1
 *
 * Response to SystemTrunkGroupGetRequest19sp1.
 *
 * @see SystemTrunkGroupGetRequest19sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:35865","type":"sequence"}]
 */
class SystemTrunkGroupGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enforceCLIDServiceAssignmentForPilotUser
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var bool|null
     */
    protected $enforceCLIDServiceAssignmentForPilotUser = null;

    /**
     * @ElementName terminateUnreachableTriggerDetectionOnReceiptOf18x
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var bool|null
     */
    protected $terminateUnreachableTriggerDetectionOnReceiptOf18x = null;

    /**
     * @ElementName pilotUserCallingLineAssertedIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy|null
     */
    protected $pilotUserCallingLineAssertedIdentityPolicy = null;

    /**
     * @ElementName enforceOutOfDialogPBXRedirectionPolicies
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var bool|null
     */
    protected $enforceOutOfDialogPBXRedirectionPolicies = null;

    /**
     * @ElementName unscreenedRedirectionHandling
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnscreenedRedirectionHandling|null
     */
    protected $unscreenedRedirectionHandling = null;

    /**
     * @ElementName enableHoldoverOfHighwaterCallCounts
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var bool|null
     */
    protected $enableHoldoverOfHighwaterCallCounts = null;

    /**
     * @ElementName holdoverPeriod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupHighwaterCallCountHoldoverPeriodMinutes|null
     */
    protected $holdoverPeriod = null;

    /**
     * @ElementName timeZoneOffsetMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupTimeZoneOffsetMinutes|null
     */
    protected $timeZoneOffsetMinutes = null;

    /**
     * @ElementName clidSourceForScreenedCallsPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCLIDSourceForScreenedCallsPolicy|null
     */
    protected $clidSourceForScreenedCallsPolicy = null;

    /**
     * @ElementName userLookupPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35865
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserLookupPolicy|null
     */
    protected $userLookupPolicy = null;

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


}

