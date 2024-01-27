<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupNightForwardingUserServiceActivationMode
 *
 * Choices for the Group Night Forwarding Service Activation for a user.
 *
 * @method static GroupNightForwardingUserServiceActivationMode USE_GROUP()
 * @method static GroupNightForwardingUserServiceActivationMode ON()
 * @method static GroupNightForwardingUserServiceActivationMode OFF()
 * @EnumValueType string
 */
class GroupNightForwardingUserServiceActivationMode extends \MyCLabs\Enum\Enum
{
    public const USE_GROUP = 'Use Group';

    public const ON = 'On';

    public const OFF = 'Off';
}

