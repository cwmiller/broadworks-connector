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
 * @ValueType string
 */
class NetworkServerType extends \MyCLabs\Enum\Enum
{

    const LOOKUP = 'Lookup';

    const UPDATE = 'Update';

    const BOTH = 'Both';


}

