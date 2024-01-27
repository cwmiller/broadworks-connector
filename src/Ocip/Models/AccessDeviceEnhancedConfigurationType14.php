<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceEnhancedConfigurationType14
 *
 * Type of enhanced configuration supported by an access device.
 *         "2 File Configuration" was formerly called "CPE Type 1"
 *         "3 File Configuration" was formerly called "CPE Type 2"
 *
 * @method static AccessDeviceEnhancedConfigurationType14 _2_FILE_CONFIGURATION()
 * @method static AccessDeviceEnhancedConfigurationType14 _3_FILE_CONFIGURATION()
 * @method static AccessDeviceEnhancedConfigurationType14 SNAP()
 * @EnumValueType string
 */
class AccessDeviceEnhancedConfigurationType14 extends \MyCLabs\Enum\Enum
{
    public const _2_FILE_CONFIGURATION = '2 File Configuration';

    public const _3_FILE_CONFIGURATION = '3 File Configuration';

    public const SNAP = 'SNAP';
}

