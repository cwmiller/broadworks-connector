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

    const RESYNC = 'Resync';

    const CHECKSYNC = 'CheckSync';

    const RESETSTRING = 'ResetString';


}

