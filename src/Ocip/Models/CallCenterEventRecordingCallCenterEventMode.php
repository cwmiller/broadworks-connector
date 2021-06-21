<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterEventRecordingCallCenterEventMode
 *
 * This parameter controls whether to enable the Call Center Event
 *         Recording service, the Enhanced Call Center Reporting service, or
 *         both services.
 *         “Call Center Event Recording” indicates the Call Center Event
 *         Recording service is enabled, and the ECCR service is disabled.
 *         “Legacy ECCR” indicates the Call Center Event Recording service
 *         is disabled, and the ECCR service is enabled. 
 *         “Both” indicates both the Call Center Event Recording service and
 *         the ECCR service are enabled.
 *
 * @method static CallCenterEventRecordingCallCenterEventMode CALL_CENTER_EVENT_RECORDING()
 * @method static CallCenterEventRecordingCallCenterEventMode LEGACY_ECCR()
 * @method static CallCenterEventRecordingCallCenterEventMode BOTH()
 * @EnumValueType string
 */
class CallCenterEventRecordingCallCenterEventMode extends \MyCLabs\Enum\Enum
{

    const CALL_CENTER_EVENT_RECORDING = 'Call Center Event Recording';

    const LEGACY_ECCR = 'Legacy ECCR';

    const BOTH = 'Both';


}

