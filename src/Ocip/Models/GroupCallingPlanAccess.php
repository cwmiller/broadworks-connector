<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallingPlanAccess
 *
 * Group's policy for accessing group level and user level calling plan configuration.
 *         "Full" provides full control over the configuration of group-level and user-level calling plans.
 *         "Restricted" indicates
 *         1) not to provide access to group-level calling plan configuration,
 *         2) to provide access to only collect calls for user level incoming calling plan,
 *         3) to provide access to only international, operator assisted, 700/900, 976, and casual calls for user level outgoing calling plan.
 *
 * @method static GroupCallingPlanAccess FULL()
 * @method static GroupCallingPlanAccess RESTRICTED()
 * @EnumValueType string
 */
class GroupCallingPlanAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const RESTRICTED = 'Restricted';


}

