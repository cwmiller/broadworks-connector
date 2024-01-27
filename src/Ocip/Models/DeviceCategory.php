<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceCategory
 *
 * Device Category
 *
 * @method static DeviceCategory GENERIC()
 * @method static DeviceCategory HOSTED()
 * @method static DeviceCategory CLIENT_APPLICATIONS()
 * @method static DeviceCategory SIP_TRUNKING()
 * @method static DeviceCategory LOCAL_GATEWAY()
 * @EnumValueType string
 */
class DeviceCategory extends \MyCLabs\Enum\Enum
{
    public const GENERIC = 'Generic';

    public const HOSTED = 'Hosted';

    public const CLIENT_APPLICATIONS = 'Client Applications';

    public const SIP_TRUNKING = 'SIP Trunking';

    public const LOCAL_GATEWAY = 'Local Gateway';
}

