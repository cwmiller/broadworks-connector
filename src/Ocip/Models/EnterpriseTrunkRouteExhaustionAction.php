<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkRouteExhaustionAction
 *
 * Enterprise Trunk Route Exhaustion Action
 *
 * @method static EnterpriseTrunkRouteExhaustionAction NONE()
 * @method static EnterpriseTrunkRouteExhaustionAction FORWARD()
 * @EnumValueType string
 */
class EnterpriseTrunkRouteExhaustionAction extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const FORWARD = 'Forward';
}

