<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NumberActivationMode
 *
 * The Number Activation Modes
 *
 *         The following values are only used in AS data mode:
 *         Group And User Activation Enabled
 *
 * @method static NumberActivationMode OFF()
 * @method static NumberActivationMode USER_ACTIVATION_ENABLED()
 * @method static NumberActivationMode GROUP_AND_USER_ACTIVATION_ENABLED()
 * @EnumValueType string
 */
class NumberActivationMode extends \MyCLabs\Enum\Enum
{
    public const OFF = 'Off';

    public const USER_ACTIVATION_ENABLED = 'User Activation Enabled';

    public const GROUP_AND_USER_ACTIVATION_ENABLED = 'Group And User Activation Enabled';
}

