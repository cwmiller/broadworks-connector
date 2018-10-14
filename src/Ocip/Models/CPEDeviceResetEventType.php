<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceResetEventType
 *
 * Type of reset event for a CPE device.
 *
 * @method static CPEDeviceResetEventType RESYNC()
 * @method static CPEDeviceResetEventType CHECK_SYNC()
 * @ValueType string
 */
class CPEDeviceResetEventType extends \MyCLabs\Enum\Enum
{

    const RESYNC = 'Resync';

    const CHECK_SYNC = 'Check Sync';


}

