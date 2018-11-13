<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePolicyLineMode
 *
 * Choices for the user device policy line mode.
 *
 * @method static UserDevicePolicyLineMode SINGLE_USER_PRIVATE_AND_SHARED()
 * @method static UserDevicePolicyLineMode MULTIPLE_USER_SHARED()
 * @EnumValueType string
 */
class UserDevicePolicyLineMode extends \MyCLabs\Enum\Enum
{

    const SINGLE_USER_PRIVATE_AND_SHARED = 'Single User Private and Shared';

    const MULTIPLE_USER_SHARED = 'Multiple User Shared';


}

