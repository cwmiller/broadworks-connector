<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NetworkServerType
 *
 * Network Server types.
 *
 * @method static NetworkServerType LOOKUP()
 * @method static NetworkServerType UPDATE()
 * @method static NetworkServerType BOTH()
 * @EnumValueType string
 */
class NetworkServerType extends \MyCLabs\Enum\Enum
{
    public const LOOKUP = 'Lookup';

    public const UPDATE = 'Update';

    public const BOTH = 'Both';
}

