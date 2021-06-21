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
 *
 * @method static DeviceActivationState DEACTIVATED()
 * @method static DeviceActivationState ACTIVATING()
 * @method static DeviceActivationState ACTIVATED()
 * @EnumValueType string
 */
class DeviceActivationState extends \MyCLabs\Enum\Enum
{

    const DEACTIVATED = 'Deactivated';

    const ACTIVATING = 'Activating';

    const ACTIVATED = 'Activated';


}

