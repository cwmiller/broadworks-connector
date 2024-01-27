<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordingOption22
 *
 * Recording Service Configuration option.  The Always with Pause/Resume,
 *         On Demand, On Demand with User Initiated Start, Always Start On Demand Keep
 *         and On Demand Keep Always Start options are not applicable for Service Users.
 *         
 *         The following elements are only used in AS data mode and are ignored in XS data mode:        
 *           Always
 *           On Demand
 *           Always with Pause/Resume
 *           On Demand with User Initiated Start
 *         
 *         The following elements are only used in XS data mode and are ignored in AS data mode:  
 *           Always Start Always Keep
 *           Always Start On Demand Keep
 *           On Demand Start Always Keep
 *
 * @method static RecordingOption22 ALWAYS()
 * @method static RecordingOption22 NEVER()
 * @method static RecordingOption22 ON_DEMAND()
 * @method static RecordingOption22 ALWAYS_WITH_PAUSE_RESUME()
 * @method static RecordingOption22 ON_DEMAND_WITH_USER_INITIATED_START()
 * @method static RecordingOption22 ALWAYS_START_ALWAYS_KEEP()
 * @method static RecordingOption22 ALWAYS_START_ON_DEMAND_KEEP()
 * @method static RecordingOption22 ON_DEMAND_START_ALWAYS_KEEP()
 * @EnumValueType string
 */
class RecordingOption22 extends \MyCLabs\Enum\Enum
{
    public const ALWAYS = 'Always';

    public const NEVER = 'Never';

    public const ON_DEMAND = 'On Demand';

    public const ALWAYS_WITH_PAUSE_RESUME = 'Always with Pause/Resume';

    public const ON_DEMAND_WITH_USER_INITIATED_START = 'On Demand with User Initiated Start';

    public const ALWAYS_START_ALWAYS_KEEP = 'Always Start Always Keep';

    public const ALWAYS_START_ON_DEMAND_KEEP = 'Always Start On Demand Keep';

    public const ON_DEMAND_START_ALWAYS_KEEP = 'On Demand Start Always Keep';
}

