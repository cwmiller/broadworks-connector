<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDigitCollectionSettingLevel
 *
 * Choices for the group digit collection feature to decide which type of settings
 * to use.
 *
 * @method static GroupDigitCollectionSettingLevel SYSTEM()
 * @method static GroupDigitCollectionSettingLevel SERVICE_PROVIDER()
 * @method static GroupDigitCollectionSettingLevel GROUP()
 * @EnumValueType string
 */
class GroupDigitCollectionSettingLevel extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';


}

