<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityServiceProviderSettingLevel
 *
 * BroadWorks Mobility setting for the service provider level.
 *
 * @method static BroadWorksMobilityServiceProviderSettingLevel SERVICEPROVIDER()
 * @method static BroadWorksMobilityServiceProviderSettingLevel SYSTEM()
 * @EnumValueType string
 */
class BroadWorksMobilityServiceProviderSettingLevel extends \MyCLabs\Enum\Enum
{
    public const SERVICEPROVIDER = 'ServiceProvider';

    public const SYSTEM = 'System';
}

