<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanRedirectingPermission
 *
 * Permission choices for Pinhole digit patterns on redirecting calls.
 *
 * @method static OutgoingPinholeDigitPlanRedirectingPermission IGNORE()
 * @method static OutgoingPinholeDigitPlanRedirectingPermission ALLOW()
 * @EnumValueType string
 */
class OutgoingPinholeDigitPlanRedirectingPermission extends \MyCLabs\Enum\Enum
{

    const IGNORE = 'Ignore';

    const ALLOW = 'Allow';


}

