<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupGetResponse19sp1
 *
 * Response to SystemTrunkGroupGetRequest19sp1.
 *
 * @see SystemTrunkGroupGetRequest19sp1
 */
class SystemTrunkGroupGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}

