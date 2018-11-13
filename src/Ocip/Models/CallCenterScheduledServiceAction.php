<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledServiceAction
 *
 * Call center scheduled service (Night Services, Holiday Services, etc.)
 * processing action.
 *
 * @method static CallCenterScheduledServiceAction NONE()
 * @method static CallCenterScheduledServiceAction BUSY()
 * @method static CallCenterScheduledServiceAction TRANSFER()
 * @EnumValueType string
 */
class CallCenterScheduledServiceAction extends \MyCLabs\Enum\Enum
{

    const NONE = 'None';

    const BUSY = 'Busy';

    const TRANSFER = 'Transfer';


}

