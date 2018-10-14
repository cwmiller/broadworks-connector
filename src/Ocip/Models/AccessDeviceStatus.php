<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceStatus
 *
 * Choices for the access device status.
 *
 * @method static AccessDeviceStatus ONLINE()
 * @method static AccessDeviceStatus OFFLINE()
 * @method static AccessDeviceStatus UNAVAILABLE()
 * @method static AccessDeviceStatus UNKNOWN()
 * @ValueType string
 */
class AccessDeviceStatus extends \MyCLabs\Enum\Enum
{

    const ONLINE = 'Online';

    const OFFLINE = 'Offline';

    const UNAVAILABLE = 'Unavailable';

    const UNKNOWN = 'Unknown';


}

