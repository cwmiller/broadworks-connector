<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStrandedCallUnavailableProcessingAction
 *
 * Call center stranded calls - unavailable routing policy processing action.
 *
 * @method static CallCenterStrandedCallUnavailableProcessingAction NONE()
 * @method static CallCenterStrandedCallUnavailableProcessingAction BUSY()
 * @method static CallCenterStrandedCallUnavailableProcessingAction TRANSFER()
 * @method static CallCenterStrandedCallUnavailableProcessingAction NIGHT_SERVICE()
 * @method static CallCenterStrandedCallUnavailableProcessingAction RINGING()
 * @method static CallCenterStrandedCallUnavailableProcessingAction ANNOUNCEMENT()
 * @EnumValueType string
 */
class CallCenterStrandedCallUnavailableProcessingAction extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const BUSY = 'Busy';

    public const TRANSFER = 'Transfer';

    public const NIGHT_SERVICE = 'Night Service';

    public const RINGING = 'Ringing';

    public const ANNOUNCEMENT = 'Announcement';
}

