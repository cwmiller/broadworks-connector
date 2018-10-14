<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DiameterRouteAction
 *
 * Choices for the action of a Diameter Route.
 *
 * @method static DiameterRouteAction LOCAL()
 * @method static DiameterRouteAction RELAY()
 * @ValueType string
 */
class DiameterRouteAction extends \MyCLabs\Enum\Enum
{

    const LOCAL = 'Local';

    const RELAY = 'Relay';


}

