<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStrandedCallProcessingAction
 *
 * Call center stranded call processing action.
 *
 * @method static CallCenterStrandedCallProcessingAction NONE()
 * @method static CallCenterStrandedCallProcessingAction BUSY()
 * @method static CallCenterStrandedCallProcessingAction TRANSFER()
 * @method static CallCenterStrandedCallProcessingAction NIGHT_SERVICE()
 * @method static CallCenterStrandedCallProcessingAction RINGING()
 * @method static CallCenterStrandedCallProcessingAction ANNOUNCEMENT()
 * @EnumValueType string
 */
class CallCenterStrandedCallProcessingAction extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const BUSY = 'Busy';

    public const TRANSFER = 'Transfer';

    public const NIGHT_SERVICE = 'Night Service';

    public const RINGING = 'Ringing';

    public const ANNOUNCEMENT = 'Announcement';
}

