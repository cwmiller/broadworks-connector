<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDigitCollectionSettingLevel
 *
 * Choices for the group digit collection feature to decide which type of settings to use.
 *
 * @method static GroupDigitCollectionSettingLevel SYSTEM()
 * @method static GroupDigitCollectionSettingLevel SERVICE_PROVIDER()
 * @method static GroupDigitCollectionSettingLevel GROUP()
 * @EnumValueType string
 */
class GroupDigitCollectionSettingLevel extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';
}

