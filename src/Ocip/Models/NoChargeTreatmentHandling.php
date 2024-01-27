<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NoChargeTreatmentHandling
 *
 * No charge treatments are handled by answering the call (via a 200 OK message)
 *         or with early media (via a 18x message)
 *
 * @method static NoChargeTreatmentHandling ANSWER()
 * @method static NoChargeTreatmentHandling EARLY_MEDIA()
 * @EnumValueType string
 */
class NoChargeTreatmentHandling extends \MyCLabs\Enum\Enum
{
    public const ANSWER = 'Answer';

    public const EARLY_MEDIA = 'Early Media';
}

