<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceResetEvent22
 *
 * Choices for the reset event of an access device.
 *
 * @method static AccessDeviceResetEvent22 RESYNC()
 * @method static AccessDeviceResetEvent22 CHECKSYNC()
 * @method static AccessDeviceResetEvent22 RESETSTRING()
 * @EnumValueType string
 */
class AccessDeviceResetEvent22 extends \MyCLabs\Enum\Enum
{
    public const RESYNC = 'Resync';

    public const CHECKSYNC = 'CheckSync';

    public const RESETSTRING = 'ResetString';
}

