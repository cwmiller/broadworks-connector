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
 * @ValueType string
 */
class CallCenterStrandedCallProcessingAction extends \MyCLabs\Enum\Enum
{

    const NONE = 'None';

    const BUSY = 'Busy';

    const TRANSFER = 'Transfer';

    const NIGHT_SERVICE = 'Night Service';

    const RINGING = 'Ringing';

    const ANNOUNCEMENT = 'Announcement';


}

