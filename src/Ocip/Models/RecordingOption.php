<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordingOption
 *
 * Recording Service Configuration.
 *
 * @method static RecordingOption ALWAYS()
 * @method static RecordingOption NEVER()
 * @method static RecordingOption ON_DEMAND()
 * @EnumValueType string
 */
class RecordingOption extends \MyCLabs\Enum\Enum
{
    public const ALWAYS = 'Always';

    public const NEVER = 'Never';

    public const ON_DEMAND = 'On Demand';
}

