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
 * @EnumValueType string
 */
class ExecutiveRolloverActionType extends \MyCLabs\Enum\Enum
{
    public const VOICE_MESSAGING = 'Voice Messaging';

    public const FORWARD = 'Forward';

    public const NO_ANSWER_PROCESSING = 'No Answer Processing';
}

