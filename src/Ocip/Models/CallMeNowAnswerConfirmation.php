<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallMeNowAnswerConfirmation
 *
 * Possible type of answer confirmation for Call Me Now.
 *
 * @method static CallMeNowAnswerConfirmation NONE()
 * @method static CallMeNowAnswerConfirmation ANY_KEY()
 * @method static CallMeNowAnswerConfirmation PASSCODE()
 * @EnumValueType string
 */
class CallMeNowAnswerConfirmation extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const ANY_KEY = 'Any Key';

    public const PASSCODE = 'Passcode';
}

