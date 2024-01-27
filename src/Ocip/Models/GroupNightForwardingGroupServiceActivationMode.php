<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupNightForwardingGroupServiceActivationMode
 *
 * Choices for the Group Night Forwarding Service Activation for a group.
 *
 * @method static GroupNightForwardingGroupServiceActivationMode AUTO_ON()
 * @method static GroupNightForwardingGroupServiceActivationMode ON()
 * @method static GroupNightForwardingGroupServiceActivationMode OFF()
 * @EnumValueType string
 */
class GroupNightForwardingGroupServiceActivationMode extends \MyCLabs\Enum\Enum
{
    public const AUTO_ON = 'Auto On';

    public const ON = 'On';

    public const OFF = 'Off';
}

