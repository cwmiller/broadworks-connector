<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceActivationState
 *
 * Device activation state for Zero Touch Provisioning.
 *         
 *         Deactivated: The device has not been onboarded yet and does not have an activation code. It cannot make or receive calls.
 *         Activating: An activation code was requested for the device, but it has not been consumed yet. The device is therefore not fully onboarded and
 *                           cannot make or receive calls.
 *         Activated: The device has been onboarded. It can make and receive calls.
 *         Activating Unknown Model: An activation code was requested for an unknown device model. 
 *                                   The unknown device is therefore not fully onboarded and cannot make or receive calls. 
 *                                   This enum value is ONLY used in WxCAS.
 *
 * @method static DeviceActivationState DEACTIVATED()
 * @method static DeviceActivationState ACTIVATING()
 * @method static DeviceActivationState ACTIVATED()
 * @method static DeviceActivationState ACTIVATING_UNKNOWN_MODEL()
 * @EnumValueType string
 */
class DeviceActivationState extends \MyCLabs\Enum\Enum
{
    public const DEACTIVATED = 'Deactivated';

    public const ACTIVATING = 'Activating';

    public const ACTIVATED = 'Activated';

    public const ACTIVATING_UNKNOWN_MODEL = 'Activating Unknown Model';
}

