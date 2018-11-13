<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionAccess
 *
 * Group's policy for accessing extension dialing configuration (i.e. - length of
 * extensions).
 *
 * @method static GroupExtensionAccess FULL()
 * @method static GroupExtensionAccess READ_ONLY()
 * @method static GroupExtensionAccess NONE()
 * @EnumValueType string
 */
class GroupExtensionAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

