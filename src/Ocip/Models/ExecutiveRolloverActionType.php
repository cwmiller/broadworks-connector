<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveRolloverActionType
 *
 * Executive rollover action.
 *
 * @method static ExecutiveRolloverActionType VOICE_MESSAGING()
 * @method static ExecutiveRolloverActionType FORWARD()
 * @method static ExecutiveRolloverActionType NO_ANSWER_PROCESSING()
 * @ValueType string
 */
class ExecutiveRolloverActionType extends \MyCLabs\Enum\Enum
{

    const VOICE_MESSAGING = 'Voice Messaging';

    const FORWARD = 'Forward';

    const NO_ANSWER_PROCESSING = 'No Answer Processing';


}

