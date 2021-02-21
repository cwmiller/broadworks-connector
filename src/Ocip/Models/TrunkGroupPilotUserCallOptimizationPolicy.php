<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupPilotUserCallOptimizationPolicy
 *
 * Trunk Group Pilot User Call Optimization Policy
 *
 * @method static TrunkGroupPilotUserCallOptimizationPolicy OPTIMIZE_FOR_USER_SERVICES()
 * @method static TrunkGroupPilotUserCallOptimizationPolicy OPTIMIZE_FOR_HIGH_CALL_VOLUME()
 * @EnumValueType string
 */
class TrunkGroupPilotUserCallOptimizationPolicy extends \MyCLabs\Enum\Enum
{

    const OPTIMIZE_FOR_USER_SERVICES = 'Optimize For User Services';

    const OPTIMIZE_FOR_HIGH_CALL_VOLUME = 'Optimize For High Call Volume';


}

