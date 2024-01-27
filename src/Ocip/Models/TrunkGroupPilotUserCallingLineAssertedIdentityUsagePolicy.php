<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
 *
 * Trunk Group Pilot User Calling Line Identity policy
 *
 * @method static TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy ALL_ORIGINATING_CALLS()
 * @method static TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy UNSCREENED_ORIGINATING_CALLS()
 * @EnumValueType string
 */
class TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy extends \MyCLabs\Enum\Enum
{
    public const ALL_ORIGINATING_CALLS = 'All Originating Calls';

    public const UNSCREENED_ORIGINATING_CALLS = 'Unscreened Originating Calls';
}

