<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DirectRouteOutgoingTrunkIdentityPolicy
 *
 * Direct Route Outgoing Trunk Identity policy to access device.
 *
 * @method static DirectRouteOutgoingTrunkIdentityPolicy DIRECT_ROUTE_TRUNK_IDENTITY()
 * @method static DirectRouteOutgoingTrunkIdentityPolicy TRUNK_GROUP_TRUNK_IDENTITY()
 * @EnumValueType string
 */
class DirectRouteOutgoingTrunkIdentityPolicy extends \MyCLabs\Enum\Enum
{
    public const DIRECT_ROUTE_TRUNK_IDENTITY = 'Direct Route Trunk Identity';

    public const TRUNK_GROUP_TRUNK_IDENTITY = 'Trunk Group Trunk Identity';
}

