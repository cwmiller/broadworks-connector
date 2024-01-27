<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupPilotUserChargeNumberUsagePolicy
 *
 * Trunk Group Pilot User Charge Number policy
 *
 * @method static TrunkGroupPilotUserChargeNumberUsagePolicy ALL_ORIGINATING_CALLS()
 * @method static TrunkGroupPilotUserChargeNumberUsagePolicy UNSCREENED_ORIGINATING_CALLS()
 * @method static TrunkGroupPilotUserChargeNumberUsagePolicy NO_CALLS()
 * @EnumValueType string
 */
class TrunkGroupPilotUserChargeNumberUsagePolicy extends \MyCLabs\Enum\Enum
{
    public const ALL_ORIGINATING_CALLS = 'All Originating Calls';

    public const UNSCREENED_ORIGINATING_CALLS = 'Unscreened Originating Calls';

    public const NO_CALLS = 'No Calls';
}

