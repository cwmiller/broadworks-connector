<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupGetResponse
 *
 * Response to SystemTrunkGroupGetRequest.
 *         
 *         Replaced by: SystemTrunkGroupGetResponse19sp1.
 *
 * @see SystemTrunkGroupGetRequest
 * @see SystemTrunkGroupGetResponse19sp1
 */
class SystemTrunkGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}

