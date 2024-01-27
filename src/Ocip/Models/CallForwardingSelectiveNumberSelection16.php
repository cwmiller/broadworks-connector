<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallForwardingSelectiveNumberSelection16
 *
 * Forward to Number Selection.
 *
 * @method static CallForwardingSelectiveNumberSelection16 FORWARD_TO_DEFAULT_NUMBER()
 * @method static CallForwardingSelectiveNumberSelection16 FORWARD_TO_SPECIFIED_NUMBER()
 * @method static CallForwardingSelectiveNumberSelection16 DO_NOT_FORWARD()
 * @EnumValueType string
 */
class CallForwardingSelectiveNumberSelection16 extends \MyCLabs\Enum\Enum
{
    public const FORWARD_TO_DEFAULT_NUMBER = 'Forward To Default Number';

    public const FORWARD_TO_SPECIFIED_NUMBER = 'Forward To Specified Number';

    public const DO_NOT_FORWARD = 'Do not forward';
}

