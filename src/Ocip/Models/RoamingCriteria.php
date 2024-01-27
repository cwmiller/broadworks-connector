<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RoamingCriteria
 *
 * Identifies the roaming criteria to be matched.
 *
 * @method static RoamingCriteria IN_HOME_NETWORK()
 * @method static RoamingCriteria IN_ROAMING_NETWORK()
 * @method static RoamingCriteria DISREGARD_ROAMING()
 * @EnumValueType string
 */
class RoamingCriteria extends \MyCLabs\Enum\Enum
{
    public const IN_HOME_NETWORK = 'In Home Network';

    public const IN_ROAMING_NETWORK = 'In Roaming Network';

    public const DISREGARD_ROAMING = 'Disregard Roaming';
}

