<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceEnhancedConfigurationMode
 *
 * Choices for the access device configuration mode.
 *
 * @method static AccessDeviceEnhancedConfigurationMode _DEFAULT()
 * @method static AccessDeviceEnhancedConfigurationMode MANUAL()
 * @method static AccessDeviceEnhancedConfigurationMode CUSTOM()
 * @EnumValueType string
 */
class AccessDeviceEnhancedConfigurationMode extends \MyCLabs\Enum\Enum
{
    public const _DEFAULT = 'Default';

    public const MANUAL = 'Manual';

    public const CUSTOM = 'Custom';
}

