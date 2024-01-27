<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceTypeConfigurationOptionType
 *
 * Device Type Configuration Option Type.
 *
 * @method static DeviceTypeConfigurationOptionType NOT_SUPPORTED()
 * @method static DeviceTypeConfigurationOptionType DEVICE_MANAGEMENT()
 * @method static DeviceTypeConfigurationOptionType LEGACY()
 * @EnumValueType string
 */
class DeviceTypeConfigurationOptionType extends \MyCLabs\Enum\Enum
{
    public const NOT_SUPPORTED = 'Not Supported';

    public const DEVICE_MANAGEMENT = 'Device Management';

    public const LEGACY = 'Legacy';
}

