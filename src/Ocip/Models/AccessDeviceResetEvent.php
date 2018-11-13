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

    const RESYNC = 'Resync';

    const CHECKSYNC = 'CheckSync';


}

