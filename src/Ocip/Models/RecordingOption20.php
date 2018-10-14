<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordingOption20
 *
 * Recording Service Configuration option.  The Always with Pause/Resume,
 *         On Demand, and On Demand with User Initiated Start option are not
 *         applicable for Service Users.
 *
 * @method static RecordingOption20 ALWAYS()
 * @method static RecordingOption20 NEVER()
 * @method static RecordingOption20 ON_DEMAND()
 * @method static RecordingOption20 ALWAYS_WITH_PAUSE_RESUME()
 * @method static RecordingOption20 ON_DEMAND_WITH_USER_INITIATED_START()
 * @ValueType string
 */
class RecordingOption20 extends \MyCLabs\Enum\Enum
{

    const ALWAYS = 'Always';

    const NEVER = 'Never';

    const ON_DEMAND = 'On Demand';

    const ALWAYS_WITH_PAUSE_RESUME = 'Always with Pause/Resume';

    const ON_DEMAND_WITH_USER_INITIATED_START = 'On Demand with User Initiated Start';


}

