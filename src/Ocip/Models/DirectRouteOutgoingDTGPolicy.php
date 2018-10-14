<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DirectRouteOutgoingDTGPolicy
 *
 * Direct Route Outgoing DTG policy to access devices.
 *
 * @method static DirectRouteOutgoingDTGPolicy DIRECT_ROUTE_DTG()
 * @method static DirectRouteOutgoingDTGPolicy TRUNK_GROUP_DTG()
 * @ValueType string
 */
class DirectRouteOutgoingDTGPolicy extends \MyCLabs\Enum\Enum
{

    const DIRECT_ROUTE_DTG = 'Direct Route DTG';

    const TRUNK_GROUP_DTG = 'Trunk Group DTG';


}

