<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupPilotUserCallingLineIdentityUsagePolicy
 *
 * Trunk Group Pilot User Calling Line Identity policy
 *
 * @method static TrunkGroupPilotUserCallingLineIdentityUsagePolicy ALL_ORIGINATING_CALLS()
 * @method static TrunkGroupPilotUserCallingLineIdentityUsagePolicy UNSCREENED_ORIGINATING_CALLS()
 * @method static TrunkGroupPilotUserCallingLineIdentityUsagePolicy NO_CALLS()
 * @EnumValueType string
 */
class TrunkGroupPilotUserCallingLineIdentityUsagePolicy extends \MyCLabs\Enum\Enum
{
    public const ALL_ORIGINATING_CALLS = 'All Originating Calls';

    public const UNSCREENED_ORIGINATING_CALLS = 'Unscreened Originating Calls';

    public const NO_CALLS = 'No Calls';
}

