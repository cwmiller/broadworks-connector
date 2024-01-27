<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointGroupSettingLevel
 *
 * MWI Delivery To Mobile Endpoint setting for the group level.
 *
 * @method static MWIDeliveryToMobileEndpointGroupSettingLevel SERVICE_PROVIDER()
 * @method static MWIDeliveryToMobileEndpointGroupSettingLevel GROUP()
 * @EnumValueType string
 */
class MWIDeliveryToMobileEndpointGroupSettingLevel extends \MyCLabs\Enum\Enum
{
    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';
}

