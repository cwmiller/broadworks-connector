<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBeingForwardedResponseCallType
 *
 * Call type choices for sending call being forward response on Redirected Calls
 *
 * @method static CallBeingForwardedResponseCallType NEVER()
 * @method static CallBeingForwardedResponseCallType INTERNAL_CALLS()
 * @method static CallBeingForwardedResponseCallType ALL_CALLS()
 * @EnumValueType string
 */
class CallBeingForwardedResponseCallType extends \MyCLabs\Enum\Enum
{
    public const NEVER = 'Never';

    public const INTERNAL_CALLS = 'Internal Calls';

    public const ALL_CALLS = 'All Calls';
}

