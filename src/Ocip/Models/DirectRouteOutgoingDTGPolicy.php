<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DirectRouteOutgoingDTGPolicy
 *
 * Direct Route Outgoing DTG policy to access devices.
 *
 * @method static DirectRouteOutgoingDTGPolicy DIRECT_ROUTE_DTG()
 * @method static DirectRouteOutgoingDTGPolicy TRUNK_GROUP_DTG()
 * @EnumValueType string
 */
class DirectRouteOutgoingDTGPolicy extends \MyCLabs\Enum\Enum
{
    public const DIRECT_ROUTE_DTG = 'Direct Route DTG';

    public const TRUNK_GROUP_DTG = 'Trunk Group DTG';
}

