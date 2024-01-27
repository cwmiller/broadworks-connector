<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ConnectedNumberSource
 *
 * Connected Number Type
 *
 * @method static ConnectedNumberSource CONFIGURABLE_CLID()
 * @method static ConnectedNumberSource GROUP()
 * @method static ConnectedNumberSource USER()
 * @method static ConnectedNumberSource DEPARTMENT()
 * @EnumValueType string
 */
class ConnectedNumberSource extends \MyCLabs\Enum\Enum
{
    public const CONFIGURABLE_CLID = 'Configurable CLID';

    public const GROUP = 'Group';

    public const USER = 'User';

    public const DEPARTMENT = 'Department';
}

