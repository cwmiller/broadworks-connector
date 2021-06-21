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

    const GENERIC = 'Generic';

    const HOSTED = 'Hosted';

    const CLIENT_APPLICATIONS = 'Client Applications';

    const SIP_TRUNKING = 'SIP Trunking';

    const LOCAL_GATEWAY = 'Local Gateway';


}

