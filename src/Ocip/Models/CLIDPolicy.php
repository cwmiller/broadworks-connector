<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CLIDPolicy
 *
 * Calling Line ID Policy Selections.
 *
 * @method static CLIDPolicy USE_DN()
 * @method static CLIDPolicy USE_CONFIGURABLE_CLID()
 * @EnumValueType string
 */
class CLIDPolicy extends \MyCLabs\Enum\Enum
{
    public const USE_DN = 'Use DN';

    public const USE_CONFIGURABLE_CLID = 'Use Configurable CLID';
}

