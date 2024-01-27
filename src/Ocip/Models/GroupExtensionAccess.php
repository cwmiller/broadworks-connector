<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionAccess
 *
 * Group's policy for accessing extension dialing configuration (i.e. - length of extensions).
 *
 * @method static GroupExtensionAccess FULL()
 * @method static GroupExtensionAccess READ_ONLY()
 * @method static GroupExtensionAccess NONE()
 * @EnumValueType string
 */
class GroupExtensionAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

