<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterRoutingType
 *
 * Call Center Routing type for distributing calls within a call center.
 *
 * @method static CallCenterRoutingType PRIORITY_BASED()
 * @method static CallCenterRoutingType SKILL_BASED()
 * @EnumValueType string
 */
class CallCenterRoutingType extends \MyCLabs\Enum\Enum
{
    public const PRIORITY_BASED = 'Priority Based';

    public const SKILL_BASED = 'Skill Based';
}

