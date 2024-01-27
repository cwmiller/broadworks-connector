<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HotelingHostAccessLevel
 *
 * Access level of the Hoteling Host Service
 *
 * @method static HotelingHostAccessLevel ENTERPRISE()
 * @method static HotelingHostAccessLevel GROUP()
 * @EnumValueType string
 */
class HotelingHostAccessLevel extends \MyCLabs\Enum\Enum
{
    public const ENTERPRISE = 'Enterprise';

    public const GROUP = 'Group';
}

