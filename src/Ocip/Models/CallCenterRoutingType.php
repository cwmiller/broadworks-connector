<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterRoutingType
 *
 * Call Center Routing type for distributing calls within a call center.
 *
 * @method static CallCenterRoutingType PRIORITY_BASED()
 * @method static CallCenterRoutingType SKILL_BASED()
 * @ValueType string
 */
class CallCenterRoutingType extends \MyCLabs\Enum\Enum
{

    const PRIORITY_BASED = 'Priority Based';

    const SKILL_BASED = 'Skill Based';


}

