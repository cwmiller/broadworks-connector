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
 * @ValueType string
 */
class RecordingOption extends \MyCLabs\Enum\Enum
{

    const ALWAYS = 'Always';

    const NEVER = 'Never';

    const ON_DEMAND = 'On Demand';


}

