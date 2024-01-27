<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksAnywhereScope
 *
 * Controls which users may use the BroadWorks Anywhere portal.
 *
 * @method static BroadWorksAnywhereScope SERVICE_PROVIDER()
 * @method static BroadWorksAnywhereScope GROUP()
 * @EnumValueType string
 */
class BroadWorksAnywhereScope extends \MyCLabs\Enum\Enum
{
    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';
}

