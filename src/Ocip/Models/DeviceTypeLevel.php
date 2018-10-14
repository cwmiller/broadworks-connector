<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceTypeLevel
 *
 * Identifies at which level in the system an identity/device profile type is
 * created.
 *
 * @method static DeviceTypeLevel SYSTEM()
 * @method static DeviceTypeLevel RESELLER()
 * @ValueType string
 */
class DeviceTypeLevel extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const RESELLER = 'Reseller';


}

