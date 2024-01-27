<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DiameterRouteAction
 *
 * Choices for the action of a Diameter Route.
 *
 * @method static DiameterRouteAction LOCAL()
 * @method static DiameterRouteAction RELAY()
 * @EnumValueType string
 */
class DiameterRouteAction extends \MyCLabs\Enum\Enum
{
    public const LOCAL = 'Local';

    public const RELAY = 'Relay';
}

