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

    const CONFIGURABLE_CLID = 'Configurable CLID';

    const GROUP = 'Group';

    const USER = 'User';

    const DEPARTMENT = 'Department';


}

