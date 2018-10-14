<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
 *
 * Trunk Group Pilot User Calling Line Identity policy
 *
 * @method static TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
 * ALL_ORIGINATING_CALLS()
 * @method static TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy
 * UNSCREENED_ORIGINATING_CALLS()
 * @ValueType string
 */
class TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy extends \MyCLabs\Enum\Enum
{

    const ALL_ORIGINATING_CALLS = 'All Originating Calls';

    const UNSCREENED_ORIGINATING_CALLS = 'Unscreened Originating Calls';


}

