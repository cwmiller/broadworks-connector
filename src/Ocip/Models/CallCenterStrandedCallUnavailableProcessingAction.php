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
 * @ValueType string
 */
class CallCenterStrandedCallUnavailableProcessingAction extends \MyCLabs\Enum\Enum
{

    const NONE = 'None';

    const BUSY = 'Busy';

    const TRANSFER = 'Transfer';

    const NIGHT_SERVICE = 'Night Service';

    const RINGING = 'Ringing';

    const ANNOUNCEMENT = 'Announcement';


}

