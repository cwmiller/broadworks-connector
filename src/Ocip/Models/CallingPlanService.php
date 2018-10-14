<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingPlanService
 *
 * Choices for Calling Plan Service type
 *
 * @method static CallingPlanService INCOMING_CALLING_PLAN()
 * @method static CallingPlanService OUTGOING_CALLING_PLAN()
 * @ValueType string
 */
class CallingPlanService extends \MyCLabs\Enum\Enum
{

    const INCOMING_CALLING_PLAN = 'Incoming Calling Plan';

    const OUTGOING_CALLING_PLAN = 'Outgoing Calling Plan';


}

