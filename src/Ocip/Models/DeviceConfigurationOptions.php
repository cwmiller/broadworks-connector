<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceConfigurationOptions
 *
 * Device Configuration Options for a device Type.
 *
 * @method static DeviceConfigurationOptions NOT_SUPPORTED()
 * @method static DeviceConfigurationOptions DEVICE_MANAGEMENT()
 * @method static DeviceConfigurationOptions LEGACY()
 * @EnumValueType string
 */
class DeviceConfigurationOptions extends \MyCLabs\Enum\Enum
{
    public const NOT_SUPPORTED = 'Not Supported';

    public const DEVICE_MANAGEMENT = 'Device Management';

    public const LEGACY = 'Legacy';
}

