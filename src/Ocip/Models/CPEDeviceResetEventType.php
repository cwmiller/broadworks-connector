<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceResetEventType
 *
 * Type of reset event for a CPE device.
 *
 * @method static CPEDeviceResetEventType RESYNC()
 * @method static CPEDeviceResetEventType CHECK_SYNC()
 * @EnumValueType string
 */
class CPEDeviceResetEventType extends \MyCLabs\Enum\Enum
{
    public const RESYNC = 'Resync';

    public const CHECK_SYNC = 'Check Sync';
}

