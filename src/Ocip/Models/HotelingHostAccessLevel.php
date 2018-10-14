<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HotelingHostAccessLevel
 *
 * Access level of the Hoteling Host Service
 *
 * @method static HotelingHostAccessLevel ENTERPRISE()
 * @method static HotelingHostAccessLevel GROUP()
 * @ValueType string
 */
class HotelingHostAccessLevel extends \MyCLabs\Enum\Enum
{

    const ENTERPRISE = 'Enterprise';

    const GROUP = 'Group';


}

