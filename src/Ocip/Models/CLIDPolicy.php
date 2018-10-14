<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CLIDPolicy
 *
 * Calling Line ID Policy Selections.
 *
 * @method static CLIDPolicy USE_DN()
 * @method static CLIDPolicy USE_CONFIGURABLE_CLID()
 * @ValueType string
 */
class CLIDPolicy extends \MyCLabs\Enum\Enum
{

    const USE_DN = 'Use DN';

    const USE_CONFIGURABLE_CLID = 'Use Configurable CLID';


}

