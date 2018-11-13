<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PriorityAlertCriteriaFromDnSelection
 *
 * Selection criteria for a from dn.
 *
 * @method static PriorityAlertCriteriaFromDnSelection ANY_EXTERNAL()
 * @method static PriorityAlertCriteriaFromDnSelection SPECIFIED_ONLY()
 * @EnumValueType string
 */
class PriorityAlertCriteriaFromDnSelection extends \MyCLabs\Enum\Enum
{

    const ANY_EXTERNAL = 'Any External';

    const SPECIFIED_ONLY = 'Specified Only';


}

