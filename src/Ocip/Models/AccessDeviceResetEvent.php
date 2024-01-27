<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceResetEvent
 *
 * Choices for the reset event of an access device.
 *
 * @method static AccessDeviceResetEvent RESYNC()
 * @method static AccessDeviceResetEvent CHECKSYNC()
 * @EnumValueType string
 */
class AccessDeviceResetEvent extends \MyCLabs\Enum\Enum
{
    public const RESYNC = 'Resync';

    public const CHECKSYNC = 'CheckSync';
}

