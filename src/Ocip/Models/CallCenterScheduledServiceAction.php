<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledServiceAction
 *
 * Call center scheduled service (Night Services, Holiday Services, etc.) processing action.
 *
 * @method static CallCenterScheduledServiceAction NONE()
 * @method static CallCenterScheduledServiceAction BUSY()
 * @method static CallCenterScheduledServiceAction TRANSFER()
 * @EnumValueType string
 */
class CallCenterScheduledServiceAction extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const BUSY = 'Busy';

    public const TRANSFER = 'Transfer';
}

