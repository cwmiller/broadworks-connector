<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LeafDeviceCategory
 *
 * Define the leaf device category values.
 *
 * @method static LeafDeviceCategory HANDSET()
 * @method static LeafDeviceCategory BASE_STATION()
 * @method static LeafDeviceCategory ALL()
 * @EnumValueType string
 */
class LeafDeviceCategory extends \MyCLabs\Enum\Enum
{
    public const HANDSET = 'Handset';

    public const BASE_STATION = 'Base Station';

    public const ALL = 'All';
}

