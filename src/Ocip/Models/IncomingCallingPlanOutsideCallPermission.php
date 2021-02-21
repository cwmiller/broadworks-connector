<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IncomingCallingPlanOutsideCallPermission
 *
 * Indicates whether incoming outside calls are permitted.
 *
 * @method static IncomingCallingPlanOutsideCallPermission ALLOW()
 * @method static IncomingCallingPlanOutsideCallPermission ALLOW_ONLY_IF_REDIRECTED_FROM_ANOTHER_USER()
 * @method static IncomingCallingPlanOutsideCallPermission DISALLOW()
 * @EnumValueType string
 */
class IncomingCallingPlanOutsideCallPermission extends \MyCLabs\Enum\Enum
{

    const ALLOW = 'Allow';

    const ALLOW_ONLY_IF_REDIRECTED_FROM_ANOTHER_USER = 'Allow Only If Redirected From Another User';

    const DISALLOW = 'Disallow';


}

