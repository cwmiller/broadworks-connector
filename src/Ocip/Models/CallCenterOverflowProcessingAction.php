<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterOverflowProcessingAction
 *
 * Call center overflow processing action.
 *
 * @method static CallCenterOverflowProcessingAction BUSY()
 * @method static CallCenterOverflowProcessingAction TRANSFER()
 * @method static CallCenterOverflowProcessingAction RINGING()
 * @EnumValueType string
 */
class CallCenterOverflowProcessingAction extends \MyCLabs\Enum\Enum
{
    public const BUSY = 'Busy';

    public const TRANSFER = 'Transfer';

    public const RINGING = 'Ringing';
}

