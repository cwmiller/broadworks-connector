<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceTypeFileEnhancedConfigurationMode
 *
 * Choices for the device type configuration mode.
 *
 * @method static DeviceTypeFileEnhancedConfigurationMode MANUAL()
 * @method static DeviceTypeFileEnhancedConfigurationMode CUSTOM()
 * @EnumValueType string
 */
class DeviceTypeFileEnhancedConfigurationMode extends \MyCLabs\Enum\Enum
{
    public const MANUAL = 'Manual';

    public const CUSTOM = 'Custom';
}

