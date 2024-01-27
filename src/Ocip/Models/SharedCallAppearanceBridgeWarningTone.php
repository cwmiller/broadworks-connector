<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SharedCallAppearanceBridgeWarningTone
 *
 * Warning tone types for Shared Call Appearance.
 *         The bridge warning tone types are none, barge-in, barge-in repeat.
 *
 * @method static SharedCallAppearanceBridgeWarningTone NONE()
 * @method static SharedCallAppearanceBridgeWarningTone BARGE_IN()
 * @method static SharedCallAppearanceBridgeWarningTone BARGE_IN_AND_REPEAT()
 * @EnumValueType string
 */
class SharedCallAppearanceBridgeWarningTone extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const BARGE_IN = 'Barge-In';

    public const BARGE_IN_AND_REPEAT = 'Barge-In and Repeat';
}

